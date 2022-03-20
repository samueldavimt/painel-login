<?php

    class Validator{

        public $alerts = [];

        public function getAlerts(){
            return $this->alerts;
        }

        public function addAlert($alert){
            $this->alerts[] = "Erro: ".$alert;
        }

        // Checagens

        public function evilCaracteres($string){

            $patternEvilCaracts = '/[-!%^*\'"()+´|~=`{}[:;<>?,\]]/i';

            preg_match_all($patternEvilCaracts, $string, $evilcaracts);

            if(count($evilcaracts[0]) > 0){
                $this->addAlert("Caracteres Inválidos Encontrados!");
                return false;
            }else{
                return true;
            }

        }

        function checkSize($string){
            $min = 30;
            if(strlen($string) < $min){
                return true;
            }else{
                $this->addAlert("Numero Máximo de Caractéres Atingido!");
                return false;
            }
        }

        public function checkEmail($email){

            if(strlen($email) < 1){
                $this->addAlert('Insira um Email!');
                return false;
            }

            $filterEmail = filter_var($email,FILTER_VALIDATE_EMAIL);

            if($filterEmail != false){
                return true;
            }else{
                $this->addAlert('Insira um Email Correto!');
                return false;
            }


        }


        public function handleChecks($values){

            $email = $values['email'];


            // Checar dados em branco
            foreach($values as $value){
                if($value == ''){
                    $this->addAlert('Preencha Todos os Dados Abaixo!');
                    return false;
                }
            }
            // Checar tamanho maximo
            foreach($values as $value){
                $checkSize = $this->checkSize($value);

                if($checkSize == false){
                    return false;
                }
            }

            // Checar caracteres especiais
            foreach($values as $value){
                $evilCaracts = $this->evilCaracteres($value);

                if($evilCaracts == false){
                    return false;
                }
            }

            // Checando email
            if($this->checkEmail($email) == false){
               return false;
            }


        }

    }

    $validator = new Validator();








?>
