<!DOCTYPE html>
<div style="background-color: dodgerblue; color: black; padding: 4px; border-radius: 5px;">
<hader><p align="center">Back End Banck</p></hader>
</div>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Geovane Marcos Pinto. Atividade mapa</title>
    </head>
    <body>
        <table>
            <tr>
                <td style="background-color: silver; color: black; padding: 7px; border-radius: 5px;"></td>
                <td style="background-color: silver; color: black; padding: 7px; border-radius: 5px;">#</td>
                <td style="background-color: silver; color: black; padding: 7px; border-radius: 5px;">Nome</td>
                <td style="background-color: silver; color: black; padding: 7px; border-radius: 5px;">Tipo</td>
            </tr>
            <tr>
                <td style="background-color: gainsboro; padding: 15px; border-radius: 5px;"><input type="checkbox"></td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px;">1</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px;">numero</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px;">int(11)</td>
            </tr>
            <tr>
                <td style="background-color: darkgrey; padding: 15px; border-radius: 5px;"><input type="checkbox"></td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">2</td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">solicitante</td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">varchar(255)</td>
            </tr>
            <tr>
                <td style="background-color: gainsboro; padding: 15px; border-radius: 5px;"><input type="checkbox"></td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px">3</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px">descricao</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px">text</td>
            </tr>
            <tr>
                <td style="background-color: darkgrey; padding: 15px; border-radius: 5px;"><input type="checkbox"></td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">4</td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">email</td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">varchar(255)</td>
            </tr>
            <tr>
                <td style="background-color: gainsboro; padding: 15px; border-radius: 5px;"><input type="checkbox"></td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px;">5</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px">ano</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px">year(4)</td>
            </tr>
            <tr>
                <td style="background-color: darkgrey; padding: 15px; border-radius: 5px;"><input type="checkbox"></td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">6</td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">status</td>
                <td style="background-color: darkgrey; color: black; padding: 7px; border-radius: 5px;">tinyint(4)</td>
            </tr>
            <tr>
                <td style="background-color: gainsboro; padding: 15px; border-radius: 5px"><input type="checkbox"></td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px;">7</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px;">dataCadastro</td>
                <td style="background-color: gainsboro; color: black; padding: 7px; border-radius: 5px">datatime</td>
            </tr>
        </table>
        <?php
        Class Cliente{
            public ($solicitante; $descricao; $email;){
            
            public ($solicitante; $descricao; $email;){
                $this-> $setsolicitante (solicitante);
                $this-> $setdescricao (descrição);
                $email-> $setemail (e-mail);
            }
            public function setsolicitante($solicitante):bool{
                if(is_string($solicitante)){
                    $this->solicitante = $solicitante;
                    return true;
                }
                else return false;
            }
            public function setdescriao($descricao):bool{
                if(is_string($descrincao)){
                    $this->descricao = $descriçao;
                    return true;
                }
                else return false;
            }
            public function setemail($email):int{
                if(is_string($email)){
                    $this->email =$email;
                    return true;
                }
                else return false;
            }
        }
        Class Sistema{
            private ($ano; $data/hora; $status;){
                $this <- set$ano;
                $this <- set$data/hora;
                $this <- setstatus;
            }
            private function setano($ano):bool {
                if(is_bool($ano)){
                    $this<- Ano = $ano;
                    return true;
                }
                else return false;
            }
            private function setdata/hora($data/hora):float {
                if(is_float($data/hora)){
                    $this<- data/Hora = $data/hora;
                    return true;
                }
                else return false;
            }
            private function setstatus($status):bool {
                if(is_bool($status)){
                    $this<- Status =$status;
                    return true;
                }
                else return false;
            }
        }
        // put your code here
        ?>
    </body>
    <div style="background-color: dodgerblue; color: black; padding: 4px; border-radius: 5px;">
        <footer><p align="center">Geovane Mrcos Pinto, Ra: 1943288-5</p></footer>
    </div>
</html>
