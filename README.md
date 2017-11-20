# sugeEDU
O sugeEDU é um sistema de gerenciamento acadêmico que busca atender algumas das necessidades de docentes e discentes em relação à vida escolar, uma vez que possui as ferramentas necessárias para promover um maior acompanhamento no âmbito escolar.
# Requisitos do Sistema
Para que o sistema possa roda em seu computador você deve criar um ambiente virtual com um servidor local em sua maquina. Se sua maquina estiver com o sitema operacional windows você pode baixar o WampServer ou o Xampp por meio dos linkis abaixo:

http://www.wampserver.com/en/

https://www.apachefriends.org/pt_br/index.html

Se no caso o seu sistema operacional for o linux execute o seguinte comando no seu terminal para a instalação do  Apache: 

     - $ sudo apt-get install apache2

Depois de instalar o servidor faça o download do programa Mysql WorkBench em seu computador. Linkin do download a baixo:

https://dev.mysql.com/downloads/workbench/

Logo apois você executar todos esses requisitos seu computador esta ponto para roda o sistema. 

Para que o sistema execute em seu computador você deve baixalo por completo. Depois verifique se dentro das pasatas bd, ielmo-marinho/emjvsl/clas a página conexão.php está compativel com local, usuário, senha e banco do seu servidor local.

    - $ con mysqli_connect("localhost", "root", "", "emjvsl_im")or die("Erro na conexão");
    
Dpois execute o banco emjvsl_im e sugeedu no Mysql WorkBench. E com isso o sistema vai está rodando sem seu conputador!
