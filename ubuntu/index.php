<?php
    include('../header.php');
?>

    <main>
        <div class="intro">
            
            <nav class="nav">
                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Fechar</a></p>
                <ul>
                    <li class="nav-title">Ubuntu</li>
                    <li class="nav-title">Instalação</li>                        
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#particao">Partição SO</a></li>
                        <li><a href="#swap">Swap</a></li>
                        <li><a href="#root">Usuário root</a></li>
                    </ul>
                    <li class="nav-title">Configurações</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#padrao">Usuário padrão</a></li>
                        <li><a href="#idioma">Atualização do idioma do sistema</a></li>
                        <li><a href="#atualizacao">Atualização do SO</a></li>
                        <li><a href="#wallpaper">Definindo o papel de parede padrão IFPR</a></li>
                        <li><a href="#proxy">Configuração do Proxy</a></li>
                        <li><a href="#ipv6">Desativar IPv6</a></li>
                        <li><a href="#tela">Remoção de proteção e bloqueio de tela</a></li>
                        <li><a href="#fontes">Repositório dos parceiros da Canonical</a></li>
                        <li><a href="#historico">Histórico do Chrome e Firefox</a></li>
                        <li><a href="#horas">Evitando problemas de horas com Dual Boot</a></li>
                        <li><a href="#restricao">Restringindo o acesso a partições</a></li>
                        <li><a href="#cert">Certificado do pfSense para navegação</a></li>                                
                    </ul>
                    <li class="nav-title">Aplicações</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#grub">Grub Customizer</a></li>
                        <li><a href="#unity-tool">Unity Tweak Tool</a></li>
                        <li><a href="#7zip">7-zip</a></li>
                        <li><a href="#smb">Samba Cliente</a></li>
                        <li><a href="#flash">Flash Player</a></li>
                        <li><a href="#chrome">Google Chrome</a></li>
                        <li><a href="#seahorse">Seahorse</a></li>
                        <li><a href="#vi">Vim</a></li>
                        <li><a href="#java">Java JDK 8</a></li>
                        <li><a href="#netbeans">Netbeans</a></li>
                        <li><a href="#adicionais">Ubuntu Restricted Extras</a></li>
                        <li><a href="#ssh">Open SSH Server</a></li>
                        <li><a href="#scratch">Scratch</a></li>
                        <li><a href="#lamp">LAMP</a></li>
                        <li><a href="#veyon">Veyon</a></li>
                        <li><a href="#vscode">VS Code</a></li>
                        <li><a href="#timefreeze">Time Freeze</a></li>                                
                    </ul>
                </ul>
            </nav>
            
            <section class="content-main">

                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Menu</a></p>
                
                <menu class="nav-intro">
                    <?php include('../menu.php');?>
                </menu>

                <h1>Imagem Ubuntu</h1>
                <h2>Ubuntu 16.04 64bits LTS</h2>

                <!--Conteudo instalacao-->
                <h3>Instalação</h3>
                <h4 id="particao">Partiçao SO&nbsp;<span class="installed">All lab</span></h4>
                <p>Partição primária de 96GB(<b>exceto no lab3 e lab5, usar 100GB</b>).</p>
                <h4 id="swap">Swap&nbsp;<span class="installed">All lab</span></h4>
                <p>Partição de 4GB(<b>exceto no lab3 e lab5</b>).</p>
                <h4 id="root">Usuário root&nbsp;<span class="installed">All lab</span></h4>
                <p>Crie o usuário administrador <b>IFPR</b> com a senha disponível na <a href="https://goo.gl/A3129L">planilha</a>.</p>
                <!--Fim conteudo instalacao-->

                <!--Conteudo configuracoes-->
                <h3>Configurações</h3>

                <h4 id="padrao">Usuário padrão&nbsp;<span class="installed">All lab</span></h4>
                <p>Crie o usuário padrão <b>Aluno</b> com a senha <b>aluno123</b> e configure o Ubuntu para iniciar automaticamente por essa conta.</p>
                <p>Caso o login automático não funcione, altere o <code class="inline">/etc/lightdm/lightdm.conf</code>.</p>
<pre>
<code class="language-bash">
autologin-user=aluno
autologin-user-timeout=0
</code>
</pre>

                <blockquote>Tenho o usuário IFPR e Aluno, então, algumas configurações são necessárias para ambos.</blockquote>

                <h4 id="idioma">Atualização do idioma do sistema&nbsp;<span class="installed">All lab</span></h4>
                <img src="../imagens/ubuntu/idioma.png" alt="Atualização de idioma do sistema">

                <h4 id="atualizacao">Atualização do SO&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get update
sudo apt-get upgrade -y 
sudo apt-get dist-upgrade -y
</code>
</pre>
                <h4 id="wallpaper">Definindo o papel de parede padrão IFPR&nbsp;<span class="installed">All lab</span></h4>
                <p>Faça o <a href="https://drive.google.com/drive/folders/1mFNMKCBx6tvJaPfzSgax-0t9ZrwJIsPn?usp=sharing">download</a>.</p>
                <h3>Automatizando</h3>
                <p>Para isso, usaremos o <code class="inline">dconf</code>.</p>
                <p>Crie o arquivo <code class="inline">user</code> em <code class="inline">/etc/dconf/profile</code> e adicione:</p>
<pre>
<code class="language-bash">
#/etc/dconf/profile/user
user-db:user
system-db:tema
</code>
</pre>
                <p>Crie o arquivo <code class="inline">00_tema_settings</code> em <code class="inline">/etc/dconf/db/tema.d</code> e adicione:</p>
<pre>
<code class="language-bash">
#/etc/dconf/db/tema.d/00_tema_settings
[org/gnome/desktop/background]
picture-uri='file:///home/aluno/Imagens/home.jpg'
</code>
</pre>
                <p>As configurações acima já resolvem a nossa vida, mas e se quisermos bloquear a troca do papel de parede?</p>
                <p>Crie o arquivo <code class="inline">00_wallpaper</code> em <code class="inline">/etc/dconf/db/tema.d/locks</code> e adicione:</p>
<pre>
<code class="language-bash">
#/etc/dconf/db/tema.d/locks/00_wallpaper
/org/gnome/desktop/background/picture-uri
</code>
</pre>
                <p>Atualize o <code class="inline">dconf</code>:</p>
<pre>
<code class="language-bash">
sudo dconf update
</code>
</pre>
                <p>Para ver o resultado, reinicie!</p>
                <p>Para mais detalhes sobre essa configuração, acesse o <a href="https://wiki.gnome.org/Projects/dconf/SystemAdministrators">Wiki do Gnome</a>.</p>

                <h4 id="proxy">Configuração do Proxy&nbsp;<span class="installed">All lab</span></h4>
                <img src="../imagens/ubuntu/proxy.png" alt="Configuração do Proxy">
                <h5>Via linha de comando</h5>
                <p>Crie o arquivo <code class="inline">proxy_var.sh</code> em <code class="inline">/etc/profile.d/</code> com o seguinte conteúdo:</p>
<pre>
<code class="language-bash">
#all user
export all_proxy="socks://192.168.0.6:3128/"
export http_proxy="http://192.168.0.6:3128/"
export https_proxy="http://192.168.0.6:3128/"
export ftp_proxy="http://192.168.0.6:3128/"
export no_proxy="localhost,127.0.0.1"

#for curl
export ALL_PROXY="socks://192.168.0.6:3128/"
export HTTP_PROXY="http://192.168.0.6:3128/"
export HTTPS_PROXY="http://192.168.0.6:3128/"
export FTP_PROXY="http://192.168.0.6:3128/"
export NO_PROXY="localhost,127.0.0.1"
</code>
</pre>
                <p>Para o <code class="inline">apt-get</code>, crie um arquivo <code class="inline">apt.conf</code> 
                em <code class="inline">/etc/apt/apt.conf.d/</code>, como o seguinte código</p>
<pre>
<code class="language-bash">
Acquire{
	HTTP::proxy "http://192.168.0.6:3128";
	HTTPS::proxy "http://192.168.0.6:3128";
	FTP::proxy "http://192.168.0.6:3128";
}
</code>
</pre>                
                <p>Se necessário, reinicie!</p>

                <h4 id="ipv6">Desativar IPv6</h4>
                <p>Nos laboratórios de informática usamos apenas IPv4, dessa forma, desativamos o IPv6.</p>
                <p>Modifique a linha <code class="inline">GRUB_CMDLINE_LINUX="locale=pt_BR"</code> em <code class="inline">/etc/default/grub</code> para:</p>
<pre>
<code class="language-bash">
GRUB_CMDLINE_LINUX="locale=pt_BR ipv6.disable=1"
</code>
</pre>
                <p> Atualize o Grub:</p>
<pre>
<code class="language-bash">
sudo update-grub
</code>
</pre>          
                <p>Reinicie para testar!</p>
                <h4 id="tela">Remoção de proteção e bloqueio de tela&nbsp;<span class="installed">All lab</span></h4>
                <img src="../imagens/ubuntu/bloqueio.png" alt="Remoção de proteção de tela e bloqueio">

                <h4 id="fontes">Repositório dos parceiros da Canonical&nbsp;<span class="installed">All lab</span></h4>
                <img src="../imagens/ubuntu/canonical.png" alt="Ativando as fontes dos parceiros da Canonical">

                <h4 id="historico">Limpando o histórico do Chrome e Firefox&nbsp;<span class="installed">All lab</span></h4>
                <p>Isso é importante para dar aquela sensação de pc novo! ;)</p>
                <h4 id="horas">Evitando problemas de horas com Dual Boot&nbsp;<span class="installed">All lab</span></h4>
                <p>Se aplica ao Ubuntu acima de 15.04.</p>
<pre>
<code class="language-bash">
sudo timedatectl set-local-rtc 1 --adjust-system-clock
</code>
</pre>
                <h4 id="restricao">Restringindo o acesso a partições&nbsp;<span class="installed">All lab</span></h4>
                <p>Isso evita o acesso desenfreado as partições do Windows.</p>
<pre>
<code class="language-bash">
sudo nano /var/lib/polkit-1/localauthority/10-vendor.d/com.ubuntu.desktop.pkla
</code>
</pre>
                <p>Na quarta linha do arquivo acima, altere <code class="inline">ResultActive=yes</code> para <code class="inline">ResultActive=auth_admin_keep</code>.</p>
                <p>Isso permite que apenas o usuário autenticado tenha acesso a partições do Windows.</p>

                <h4 id="cert">Certificado do pfSense para navegação&nbsp;<span class="installed">All lab</span></h4>
                <p>Faça do <a href="https://drive.google.com/drive/folders/1Oc7tfxygvQ6s0IoTgY1sGfhsBtUEKnds?usp=sharing">download do certificado</a> e instale no Chrome e Firefox.</p>
                <!--Fim conteudo configuracoes-->

                <!--Conteudo aplicacoes-->
                <h3>Aplicações</h3>
                <h4 id="grub">Grub Customizer&nbsp;<span class="installed">All lab</span></h4>
                <p>Configure o grub para que o pc sempre inicialize automaticamente pelo Windows.</p>
<pre>
<code class="language-bash">
sudo add-apt-repository ppa:danielrichter2007/grub-customizer
sudo apt-get update
sudo apt-get install grub-customizer
</code>
</pre>
                <h4 id="unity-tool">Unity Tweak Tool&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install unity-tweak-tool
</code>
</pre>                
                <p>Serve para optimizar a interface do Ubuntu.</p>

                <h4 id="7zip">7-zip&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install p7zip p7zip-full p7zip-rar lzma lzma-dev
</code>
</pre>

                <h4 id="smb">Samba Cliente&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install smbclient
</code>
</pre>

                <h4 id="flash">Flash Player&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install adobe-flashplugin browser-plugin-freshplayer-pepperflash
</code>
</pre>

                <h4 id="chrome">Google Chrome&nbsp;<span class="installed">All lab</span></h4>
                <p>Faça o download do <a href="https://www.google.com/chrome/">Google Chrome</a>.</p>

                <h4 id="seahorse">Seahorse&nbsp;<span class="installed">All lab</span></h4>
                <p>Serve para remover o incômodo pedido de senha do Google Chrome.</p>
<pre>
<code class="language-bash">
sudo apt-get install seahorse
</code>
</pre>
                <img src="../imagens/ubuntu/seahorse.png" alt="Configurando Seahorse">

                <h4 id="vi">Vim&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install vim
</code>
</pre>

                <h4 id="java">Java JDK 8&nbsp;<span class="installed">All lab</span></h4>
                <p>Faça o <a href="https://drive.google.com/drive/folders/1ep3ja3fJ-dgS9F0AtRa3LGv8XdVNDQXV?usp=sharing">download</a> do arquivo de instalação.</p>
                <p>Crie a pasta de instalação:</p>
<pre>
<code class="language-bash">
sudo mkdir /usr/lib/jvm
</code>
</pre>
                <blockquote>
                        Neste exemplo, instalei a versão jdk-8u191, faça as alterações necessárias em caso de uma versão diferente.
                </blockquote>
                <p>Extraindo os arquivos:</p>
<pre>
<code class="language-bash">
sudo tar zxvf jdk-8u191-linux-x64.tar.gz -C /usr/lib/jvm
</code>
</pre>
                <p>Criamos o link simbólico:</p>
<pre>
<code class="language-bash">
sudo ln -s /usr/lib/jvm/jdk1.8.0_191 /usr/lib/jvm/java-oracle
</code>
</pre>
                <p>Crie o arquivo <code class="inline">java_var.sh</code> em <code class="inline">/etc/profile.d/</code> com o seguinte conteúdo:</p>
<pre>
<code class="language-bash">
JAVA_HOME=/usr/lib/jvm/java-oracle
PATH=$PATH:$HOME/bin:$JAVA_HOME/bin
export JAVA_HOME
export JRE_HOME
export PATH
</code>
</pre>
                <p>Reinicie!</p>
                <p>Confira se está tudo ok:</p>
<pre>
<code class="language-bash">
java -version
javac -version
</code>
</pre>
                <h4 id="netbeans">Netbeans&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo add-apt-repository ppa:vajdics/netbeans-installer
sudo apt update
sudo apt install netbeans-installer
</code>
</pre>
                <h3>JasperReports Library</h3>
                <p>Baixe o <a href="https://drive.google.com/drive/folders/1ep3ja3fJ-dgS9F0AtRa3LGv8XdVNDQXV?usp=sharing">JasperReports Library</a>. Crie a pasta <code class="inline">portable</code> em <code class="inline">/home/</code> para deixar a biblioteca de forma permanente, por último, adicione a biblioteca no Netbeans para o perfil do <b>Aluno</b>.</p>
                <p>Não se esqueça das permissões:</p>
<pre>
<code class="language-bash">
sudo chmod -R 755 /home/portable
</code>
</pre>
                <h4 id="adicionais">Ubuntu Restricted Extras&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install ubuntu-restricted-extras
</code>
</pre>

                <h4 id="ssh">Open SSH Server&nbsp;<span class="installed">All lab</span></h4>
                <p>Para usar o acesso remoto.</p>
<pre>
<code class="language-bash">
sudo apt-get install openssh-server
</code>
</pre>

                <h4 id="scratch">Scratch&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install scratch
</code>
</pre>

                <h4 id="lamp">LAMP&nbsp;<span class="installed">All lab</span></h4>
<pre>
<code class="language-bash">
sudo apt-get install lamp-server^
sudo apt-get install phpmyadmin
</code>
</pre>
                <p>Caso o <b>MySQL esteja travavando</b> o desligamento ou reinicialização do Ubuntu, confira se a data/hora está no correta no setup!</p>
                <p>Em último caso, altere o arquivo <code class="inline">/lib/systemd/system/mysql.service</code>, logo após <code class="inline">Description, adicione</code>:</p>
<pre>
<code class="language-bash">
After=network.target time-sync.target
Wants=time-sync.target
</code>
</pre>
                <p>Escrita de URL.</p>
<pre>
<code class="language-bash">
sudo a2enmod rewrite
</code>
</pre>
                <p>A alteração abaixo e necessário para o WordPress, reflete nos links permanentes da plataforma.</p>
                <p>Abra o arquivo <code class="inline">/etc/apache2/apache2.conf</code> e encontre o trecho abaixo:</p>
<pre>
<code class="language-bash">
&lt;Directory /var/www/&gt;
Options Indexes FollowSymLinks
AllowOverride None
Require all granted
&lt;/Directory&gt;
</code>
</pre>
                <p>Altere para:</p>
<pre>
<code class="language-bash">
&lt;Directory /var/www/&gt;
Options Indexes FollowSymLinks
AllowOverride All
Require all granted
&lt;/Directory&gt;
</code>
</pre>

                <p>Conceder permissão total para a pasta html.</p>
<pre>
<code class="language-bash">
sudo chmod -R 777 /var/www/html
</code>
</pre>

                <p>Por fim, reinicie o Apache.</p>
<pre>
<code class="language-bash">
sudo service apache2 restart
</code>
</pre>
                <h4 id="veyon">Veyon&nbsp;<span class="installed">All lab</span></h4>
                <p>Mais informações, acesse a página do software <a href="https://veyon.io/">Veyon</a>.</p>
                <p>Instalando dependências:</p>
<pre>
<code class="language-bash">
sudo apt-get install g++ make cmake qtbase5-dev qtbase5-dev-tools qttools5-dev qttools5-dev-tools \
            xorg-dev libxtst-dev libjpeg-dev zlib1g-dev libssl-dev libpam0g-dev \
            libprocps-dev liblzo2-dev libqca2-dev libqca-qt5-2-dev libldap2-dev \
            libsasl2-dev
</code>
</pre>
                <p>Instalando o Veyon:</p>
<pre>
<code class="language-bash">
sudo add-apt-repository ppa:veyon/stable
sudo apt-get update
</code>
</pre>
                <p>Usando <code class="inline">veyon cli</code> para importar o arquivo de <b>configuração.json</b> e <b>chave pública</b>.</p>
<pre>
<code class="language-bash">
USER=aluno
JSON=veyon-cliente.json
CHAVE=professor_public_key.pem
TIPO=public

sudo veyon-cli config import /home/$USER/Downloads/Veyon/$JSON

sudo veyon-cli authkeys import professor/$TIPO /home/$USER/Downloads/Veyon/Chaves/$CHAVE
</code>
</pre>
                <h4 id="vscode">VS Code&nbsp;<span class="installed">All lab</span></h4>
                <p>Faça o download do <a href="https://code.visualstudio.com/">VS Code</a>.</p>
                

                <h4 id="timefreeze">Time Freeze&nbsp;<span class="installed">All lab</span></h4>
                <p>Na verdade isso é apenas um script para manter o sistema sempre com cara de novo, pelo menos o SO!</p>
                <p>Primeiro crie um perfil ideal, com favoritos, papel de parede e etc. Com o perfil criado, siga os comandos abaixo:</p>
<pre>
<code class="language-bash">
sudo mkdir /home/resetuser
sudo cp -R /home/aluno/* /home/resetuser
sudo cp -R /home/aluno/.[a-zA-Z]* /home/resetuser
</code>
</pre>
                <p>Agora criamos um script para fazer o inverso no diretório <code class="inline">/sbin</code>, chamarei o script de <code class="inline">reset-user</code>, segue código completo:</p>
        
<pre>
<code class="language-bash">
#!/bin/sh

rm -rf /home/aluno

mkdir /home/aluno

cp -R /home/resetuser/* /home/aluno

cp -R /home/resetuser/.[a-zA-Z]* /home/aluno

chown -R aluno /home/aluno
</code>
</pre>
                <p>Permissão de execução para o <code class="inline">reset-user</code> :</p>
<pre>
<code class="language-bash">
sudo chmod +x /sbin/reset-user
</code>
</pre>
                <p>Agora criamos o serviço em <code class="inline">/etc/systemd/system/</code> para rodar o script, chamarei o serviço de <code class="inline">reset-user.service</code>, segue conteúdo completo do arquivo:</p>
<pre>
<code class="language-bash">
[Unit]
Description=Restore user Aluno
DefaultDependencies=no
Before=shutdown.target reboot.target halt.target

[Service]
Type=oneshot
ExecStart=/sbin/reset-user

[Install]
WantedBy=halt.target reboot.target shutdown.target
</code>
</pre>
                <p>O serviço acima será excutado ao reiniciar ou desligar o sistema.</p>
                <p>Por último, ativamos o serviço.</p>
<pre>
<code class="language-bash">
#disable
sudo systemctl enable reset-user.service
#enable
sudo systemctl disable reset-user.service
</code>
</pre>
                <!--Fim conteudo aplicacoes-->
            </section>

        </div>
    </main>

<?php
    include('../topo.php');
    include('../footer.php');
?>