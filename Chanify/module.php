<?php

declare(strict_types=1);
    class Chanify extends IPSModule
    {
        public function Create()
        {
            //Never delete this line!
            parent::Create();

            $this->RegisterPropertyString('URL', '');
            $this->RegisterPropertyString('ApplicationToken', '');
        }

        public function Destroy()
        {
            //Never delete this line!
            parent::Destroy();
        }

        public function ApplyChanges()
        {
            //Never delete this line!
            parent::ApplyChanges();
        }

        private function BuildMessageURL()
        {
            return rtrim($this->ReadPropertyString('URL'), '/').'/v1/sender/'.$this->ReadPropertyString('ApplicationToken');
        }

        public function SendMessage(string $message, string $title = NULL)
        {
            return $this->SendMessageEx($message, $title);
        }

        public function SendTestMessage()
        {
            return $this->SendMessageEx($this->Translate('This is a test message from your Symcon instance'));
        }

        public function SendMessageEx(string $message, string $title = NULL, string $copy = NULL, int $autocopy = NULL, int $sound = NULL, int $priority = NULL, string $interruptionlevel = NULL)
        {
            $data = [
                'text' => $message
            ];
            empty($title) ?: $data['title'] = $title;
            empty($copy) ?: $data['copy'] = $copy;
            ($autocopy !== 0 && $autocopy !== 1) ?: $data['autocopy'] = $autocopy;
            ($sound !== 0 && $sound !== 1) ?: $data['sound'] = $sound;
            ($priority !== 5 && $priority !== 10) ?: $data['priority'] = $priority;
            ($interruptionlevel !== "active" && $interruptionlevel !== "passive" && $interruptionlevel !== "time-sensitive") ?: $data['interruptionlevel'] = $interruptionlevel;

            curl_setopt_array($ch = curl_init(), [
                CURLOPT_URL        => $this->BuildMessageURL(),
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_SAFE_UPLOAD    => true,
                CURLOPT_RETURNTRANSFER => true,
            ]);
            $response = curl_exec($ch);

            // Check for errors and display the error message
            if (!$response) {
                $errorArr = [
                    'error'            => curl_strerror(curl_errno($ch)),
                    'errorCode'        => curl_getinfo($ch, CURLINFO_RESPONSE_CODE),
                    'errorDescription' => curl_error($ch),
                ];
                $this->LogMessage(json_encode($errorArr), KL_ERROR);
                $this->SetStatus(201);

                return false;
            }

            curl_close($ch);

            $responseObject = json_decode($response);
            if (property_exists($responseObject, 'request-uid')) {
                $this->SetStatus(102);

                return true;
            } elseif (property_exists($responseObject, 'res') && $responseObject->{'res'} == 404) {
                $this->SetStatus(202);
            } elseif (property_exists($responseObject, 'res') && $responseObject->{'res'} == 401) {
                $this->SetStatus(203);
            }

            $this->LogMessage($response, KL_ERROR);

            return false;
        }
    }
