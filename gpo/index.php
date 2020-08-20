<?php 
    include('../header.php');
?>

    <main>
        <div class="intro">
            
            <nav class="nav">
                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Fechar</a></p>
                <ul>
                    <li class="nav-title">Geral</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#adm-local">Administrator Local</a></li>
                        <li><a href="#remoto">Acesso remoto</a></li>
                        <li><a href="#cert">Certificado</a></li>
                        <li><a href="#login">Login automático</a></li>
                        <li><a href="#proxy">Proxy</a></li>
                        <li><a href="#server-ad">Servidor AD</a></li>
                    </ul>

                    <li class="nav-title">Navegadores</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#conf-chrome">Configuração do Google Chrome</a></li>
                        <li><a href="#default-chrome">Google Chrome como padrão</a></li>
                        <li><a href="#update-chrome">Atualização do Chrome</a></li>
                        <li><a href="#conf-firefox">Configuração do Firefox</a></li>
                        <li><a href="#default-firefox">Mensagem de navegador padrão</a></li>
                        <li><a href="#enable-roots">Enable Roots</a></li>
                        <li><a href="#update-firefox">Atualização do Firefox</a></li>
                    </ul>

                    <li class="nav-title">Relação de confiança</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#home-chrome">Tempo da senha</a></li>
                        <li><a href="#home-chrome">Diferença de horas</a></li>
                    </ul>

                    <li class="nav-title">Data e hora</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#horas">Alterar horas</a></li>
                        <li><a href="#tzutil">TZUTIL</a></li>
                    </ul>

                    <li class="nav-title">Tema</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#horas">Papel de parede</a></li>
                        <li><a href="#tzutil">Personalização</a></li>
                    </ul>

                </ul>
            </nav>
            
            <section class="content-main">

                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Menu</a></p>

                <menu class="nav-intro">
                    <?php include('../menu.php');?>
                </menu>
 
                <!--Conteudo Geral-->
                <h1>Políticas para Active Directory</h1>
                <h2 id="adm-local">Administrator Local</h2>
                <p>1 - Criar um grupo global;</p>
                <p>2 - Adicionar usuários que serão administradores;</p>
                <p>3 - Criar uma gpo com nome <code class="inline">adm_local</code>. Use o nome que achar conveniente;</p>
                <p>4 - O caminho da GPO é:</p>
                <img src="../imagens/gpo/geral/adm_local.PNG" alt="ADM Local">
                <p>5 - Com lado direito do mouse sobre a seguna coluna, adicione o grupo criado anteriormente;</p>
                <p>6 - Em propriedades, em "Este grupo é um membro de:" Clique em Adicionar... e 
                no campo Grupo preencha com "administradores".</p>
                <p>Acesse uma máquina cliente do domínio, atualize as políticas(<code class="inline">gpupdate /force</code>) e faça o teste!</p>
                <blockquote>
                Lembrando que todo usuário que incluir neste grupo, terá poderes administrativos somente na máquina local,
                não tendo acesso ao controlador de domínio com esse privilégio.
                </blockquote>

                <h2 id="remoto">Acesso remoto</h2>
                <p>Configurando o acesso remoto:</p>
                <img src="../imagens/gpo/geral/remoto.png" alt="Acesso remoto">

                <h2 id="cert">Certificado</h2>
                <p>Disponibilizando certificado para os computadores clientes:</p>
                <img src="../imagens/gpo/geral/certificado.png" alt="Certificado">

                <h2 id="login">Login automático</h2>
                <p>Login automático do Windows:</p>
                <img src="../imagens/gpo/geral/login.png" alt="Login automático">
                <p>Detalhes de <code class="inline">AutoAdminLogon</code>:</p>
<pre>
<code class="language-bash">
Ação: Atualizar
Hive: HKEY_LOCAL_MACHINE
caminho da Chave: SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon
Nome do valor: AutoAdminLogon
Tipo de valor: REG_SZ
Dados de valor: 1
</code>
</pre>                
                <p>Detalhes de <code class="inline">DefaultDomainName</code>:</p>
<pre>
<code class="language-bash">
Ação: Atualizar
Hive: HKEY_LOCAL_MACHINE
caminho da Chave: SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon
Nome do valor: DefaultDomainName
Tipo de valor: REG_SZ
Dados de valor: ensino.umuarama.local
</code>
</pre>
                <p>Detalhes de <code class="inline">DefaultPassword</code>:</p>
<pre>
<code class="language-bash">
Ação: Atualizar
Hive: HKEY_LOCAL_MACHINE
caminho da Chave: SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon
Nome do valor: DefaultPassword
Tipo de valor: REG_SZ
Dados de valor: aluno123
</code>
</pre>                
                <p>Detalhes de <code class="inline">DefaultUserName</code>:</p>
<pre>
<code class="language-bash">
Ação: Atualizar
Hive: HKEY_LOCAL_MACHINE
caminho da Chave: SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon
Nome do valor: DefaultUserName
Tipo de valor: REG_SZ
Dados de valor: aluno
</code>
</pre>
             
                <h2 id="proxy">Proxy</h2>
                <p>Configurando proxy nos computadores clientes:</p>
                <img src="../imagens/gpo/geral/proxy.png" alt="Configuração de proxy">
                <p>Detalhes de <code class="inline">ProxyEnable</code>:</p>
<pre>
<code class="language-bash">
Ação: Substituir
Caminho da Chave: Software\Microsoft\Windows\CurrentVersion\Internet Settings
Nome do valor: ProxyEnable
Tipo de valor: REG_DWORD
Dados de valor: 00000001
Base: Hexadecimal
</code>
</pre>
                <p>Detalhes de <code class="inline">ProxyOverride</code>:</p>
<pre>
<code class="language-bash">
Ação: Substituir
Caminho da Chave: Software\Microsoft\Windows\CurrentVersion\Internet Settings
Nome do valor: ProxyOverride
Tipo de valor: REG_SZ
Dados de valor: 192.168.*;&lt;local&gt;
</code>
</pre>
                <p>Detalhes de <code class="inline">ProxyServer</code>:</p>
<pre>
<code class="language-bash">
Ação: Substituir
Caminho da Chave: Software\Microsoft\Windows\CurrentVersion\Internet Settings
Nome do valor: ProxyServer
Tipo de valor: REG_SZ
Dados de valor: 192.168.0.6:3128
</code>
</pre>
                <p>Essa regra é para a página inicial do Internet Explorer. Detalhes de <code class="inline">Start Page</code>:</p>
<pre>
<code class="language-bash">
Ação: Substituir
Caminho da Chave: Software\Microsoft\Internet Explorer\Main
Nome do valor: Start Page
Tipo de valor: REG_SZ
Dados de valor: https://umuarama.ifpr.edu.br
</code>
</pre>                

                <h2 id="server-ad">Servidor AD</h2>
                <p>Caso o computador não esteja enxergando o servidor AD:</p>
                <img src="../imagens/gpo/geral/acessar-ad.png" alt="Acessar AD">
                <p>Detalhes de <code class="inline">Nome do valor</code>:</p>
<pre>
<code class="language-bash">
#exemplo
\\192.168.0.11
</code>
</pre>
                <p>Detalhes de <code class="inline">Valor</code>:</p>
<pre>
<code class="language-bash">
RequireMutualAuthentication=0,RequireIntegrity=0,RequirePrivacy=0
</code>
</pre>              
            <!--Fim conteudo Geral-->          

            <!--Conteudo Navegadores-->
            <h2 id="conf-chrome">Configuração do Google Chrome</h2>
            <p>Baixe o <a href="https://drive.google.com/drive/folders/1ep3ja3fJ-dgS9F0AtRa3LGv8XdVNDQXV?usp=sharing">Modelo Administrativo</a> e adicione ao seu Editor de Gerenciamento.</p>
            <p>Configuração do site da página inicial.</p>
            <img src="../imagens/gpo/navegador/conf-chrome.PNG" alt="Configuração do Google Chrome">

            <h2 id="default-chrome">Google Chrome como navegador padrão</h2>
            <img src="../imagens/gpo/navegador/default-chrome.PNG" alt="Google Chrome como navegador padrão">

            <h2 id="update-chrome">Desativar atualização do Google Chrome</h2>
            <p>Crie um <code class="inline">BAT</code> para rodar na inicialização do sistema contendo:</p>
<pre>
<code class="language-bash">
@echo off
    rem Google Update = gupdate
		sc config "gupdate" start= disabled
	rem Google Update = gupdatem
		sc config "gupdatem" start= disabled
exit
</code>
</pre>
            <p>Caminho da regra:</p>
            <img src="../imagens/gpo/navegador/update.PNG" alt="Atualização do Chrome">

            <h2 id="conf-firefox">Configuração do Firefox</h2>
            <p>Baixe o <a href="https://drive.google.com/drive/folders/1ep3ja3fJ-dgS9F0AtRa3LGv8XdVNDQXV?usp=sharing">Modelo Administrativo</a> e adicione ao seu Editor de Gerenciamento.</p>
            <img src="../imagens/gpo/navegador/conf-firefox.PNG" alt="Página inicial do Firefox">

            <h2 id="default-firefox">Mensagem de navegador padrão</h2>
            <img src="../imagens/gpo/navegador/msg-firefox.png" alt="Pergunta de navedor padrão">

            <h2 id="bat-firefox">BAT para ativar as regras</h2>
            <img src="../imagens/gpo/navegador/firefox-bat.PNG" alt="Para as regras serem aplicadas no navegador">

            <h2 id="enable-roots">Enable Roots</h2>
            <p>Essa regra habilita a leitura do certificado do pfSense.</p>
            <p>Caminho da regra:</p>
            <img src="../imagens/gpo/navegador/firefox-enable-roots.PNG" alt="Enable Roots">
            <p>Baixe o arquivo.</p>

            <h2 id="update-firefox">Atualização do Firefox</h2>
            <p>Desabilita a atualização do Firefox em segundo plano e automático.</p>
            <p>Crie um <code class="inline">BAT</code> para rodar na inicialização do sistema contendo:</p>
<pre>
<code class="language-bash">
@echo off
	rem Mozila Maintenance = MozillaMaintenance
		sc config "MozillaMaintenance" start= disabled
exit
</code>
</pre>
            <p>Caminho da regra:</p>
            <img src="../imagens/gpo/navegador/update.PNG" alt="Atualização do Firefox">
            <!--Fim conteudo Navegadores-->

            <!--Tema IFPR-->
            <h2 id="wallpaper">Papel de Parede</h2>
            <img src="../imagens/gpo/tema/wallpaper.png" alt="Definindo Papel de Parede">

            <h2 id="script-wallpaper">Script do Papel de Parede</h2>
            <img src="../imagens/gpo/tema/script-wallpaper.PNG" alt="Script do Wallpaper">
            <p>O script copia a imagem para o computador cliente, evitando sobrecarga!</p>
<pre>
<code class="language-bash">
@echo off

if not exist "c:\temp\home.jpg" (
	mkdir c:\temp
	xcopy /y \\servidor\home.jpg c:\temp
)

exit
</code>
</pre>

            <h2 id="tema-default">Personalização</h2>
            <img src="../imagens/gpo/tema/personalizacao.png" alt="Personalização">            
            
            <!--Fim Tema IFPR-->
            </section>

        </div>
    </main>

<?php
    include('../topo.php');
    include('../footer.php');
?>