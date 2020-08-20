<?php 
    include('../header.php');
?>

    <main>
        <div class="intro">
            
            <nav class="nav">
                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Fechar</a></p>
                <ul>
                    <li class="nav-title">Windows</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#usertemp">Solução para usuário temporário</a></li>
                        <li><a href="#pen">Removendo vírus de Pen Drive</a></li>
                        <li><a href="#disco">Solução para Windows 8 ou 10 com disco em 100%</a></li>
                        <li><a href="#diskpart">Removendo partições do Windows 10</a></li>
                        <li><a href="#servicos">Desativando serviços via cmd</a></li>
                        <li><a href="#fast-init">Desativando inicialização rápida no Windows 10</a></li>
                    </ul>
                    <li class="nav-title">Ubuntu</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#errordpkg">Sub-process /usr/bin/dpkg returned an error code (1)</a></li>
                        <li><a href="#openusb">Abrindo dispositivo USB na VM</a></li>
                        <li><a href="#boot-repair">Boot-repair</a></li>
                    </ul>
                    <li class="nav-title">Data Show</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#lampada">A lâmpada não liga/funciona</a></li>
                    </ul>
                    <li class="nav-title">Rede</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#hostname">Descobrindo o hostname pelo IP</a></li>
                    </ul>
                </ul>
            </nav>
            
            <section class="content-main">

                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Menu</a></p>

                <menu class="nav-intro">
                    <?php include('../menu.php');?>
                </menu>

                <!--Conteudo windows-->
                <h1 id="windows">Windows</h1>
                <h2 id="usertemp">Resolvendo o problema de usuário temporário</h2>
                <p>Com uma conta de Administrador, faça os procedimentos a seguir.</p>
                <p>1 - Abra o regedit e navegue até:</p>
<pre>
<code class="language-powershell">
HKEY_LOCAL_MACHINE -&gt;SOFTWARE-&gt;Microsoft-&gt;Windows NT-&gt;CurrentVersion-&gt;ProfileList
</code>
</pre>
                <p>2 - Selecione as que tem o nome bem extenso, por exemplo:</p>
<pre>
<code class="language-powershell">
S-1-5-21-3402367454-1173906501-2481948151-1226
</code>
</pre>
                <p>3 - Encontre a pasta que pertence ao usuário problemático e exclua.</p>
                <p>4 - Agora, acesse o diretório de usuários:</p>
<pre>
<code class="language-powershell">
C:\Users
</code>
</pre>
                <p>5 - E renomeie a pasta do usuário problemático, por exemplo:</p>
<pre>
<code class="language-powershell">
atual: fulano		
renomeado: fulano.old
</code>
</pre>
                <p>6 - Depois desses passos, reinicie o Windows.</p>
                <p>7 - Recrie a conta do usuário e copie os arquivos do usuário antigo para a nova conta.</p>
                <p>Com isso, você tem a mesma conta de usuário funcionando sem problemas.</p>

                <h2 id="pen">Removendo vírus de Pen Drive</h2>
                <p>Abra o prompt de comandos do Windows com permissões de Administrador e acesse o Pen Drive digitando a letra da unidade e dois pontos como <code class="inline">f:</code> e tecle enter, e visualizará algo como:</p>
<pre>
<code class="language-powershell">
f:\&gt;
</code>
</pre>
                <p>Depois de acessado o Pen Drive, execute o comando abaixo:</p>
<pre>
<code class="language-powershell">
attrib -r -a -s -h /s /d *.*
</code>
</pre>
                <p>Entenda melhor o <a href="https://technet.microsoft.com/pt-br/library/bb490868.aspx">Attrib</a>.</p>
                <p>Depois que o processo terminar, execute o comando abaixo para excluir os atalhos:</p>
<pre>
<code class="language-powershell">
del *.lnk
</code>
</pre>
                <p>Após esses passos, todos os arquivos estarão visíveis novamente, prossiga com a exclusão das pastas/arquivos suspeitas(vírus) e pronto.</p>

                <blockquote>
                    Aqui não mencionei os nomes/arquivos infectados, pois varia bastante. A melhor recomendação e excluir os arquivos estranhos.
                    Esse método também funciona quando os arquivos apenas desaparecem(não tem atalhos), quando isso acontece, os arquivos
                    apenas são movidos para uma única pasta no próprio dispositivo infectado, bastando apenas reorganizar os arquivos
                    após os procedimentos.
                </blockquote>

                <h2 id="disco">Solução para Windows 8 ou 10 com disco em 100%</h2>
                <p>Desative os seguintes serviços em <code class="inline">services.msc</code>:</p>
                <p>Pare e desative o serviço <b>Superfetch</b>;<br>
                Pare e desative o serviço <b>Windows Search</b>;<br>
                Pare e desative o serviço de <b>Transferência Inteligente</b>. Ainda em propriedade desse serviço, na aba recuperação, na primeira/segunda/posteriores falhas, altere para não executar nenhuma ação e, em Zerar contagem após falhas, altere o valor para 0;<br>
                Pare e desabilite o <b>Schedule do Windows</b>;<br>
                </p>

                <p>Verifique se o uso do disco normalizou, em caso de negativa, prossiga para a última etapa;</p>

                <p>
                Acesse o <code class="inline">regedit</code>, siga o caminho abaixo:
                </p>
<pre>
<code class="language-powershell">
HKEY_LOCAL_MACHINE -> SYSTEM -> CurrentControlSet -> Services -> Schedule
</code>
</pre>
                <p>
                Altere o valor do registro <b>Start</b> de <b>2</b> para <b>4</b>.<br>
                Reinicie o computador.<br>
                Com isto, todas as tarefas agendadas do Windows não serão executadas e o consumo normalmente volta ao normal.
                </p>
                <h2 id="servicos">Desativando serviços via cmd.</h2>
                <p>Alguns exemplos de uso:</p>
<pre>
<code class="language-powershell">
auto: automático
disabled: Desativado
delayed-auto: Automático com atraso na inicialização

rem Windows Update = wuauserv
    sc config "wuauserv" start= disabled
rem Google Update = gupdate
    sc config "gupdate" start= disabled
rem Google Update = gupdatem
    sc config "gupdatem" start= disabled
rem Google Chrome Elevation Service = GoogleChromeElevationService
    sc config "GoogleChromeElevationService" start= disabled
rem Backup do Windows 10 = SDRSVC
    sc config "SDRSVC" start= disabled
rem OCS Iventory = OCS Inventory Service
    sc config "OCS Inventory Service" start= delayed-auto
rem Mozila Maintenance = MozillaMaintenance
    sc config "MozillaMaintenance" start= disabled
</code>
</pre>
                <h2 id="fast-init">Desativar inicialização rápida no windows 10.</h2>
                <p>Pode ser realizado alterando o registro através do cmd:</p>
<pre>
<code class="language-powershell">
powercfg.exe /hibernate off
</code>
</pre>                
                <!--Fim conteudo windows-->

                <!--Diskpart-->
                <h2 id="diskpart">Removendo partições do Windows 10</h2>
                <p>Execute os comandos abaixo como administrador:</p>
<pre>
<code class="language-powershell">
diskpart
</code>
</pre>
                <p>Listando os discos:</p>
<pre>
<code class="language-powershell">
list disk
</code>
</pre>                
                <p>Selecione o disco, onde <b>N</b> é o número do disco:</p>
<pre>
<code class="language-powershell">
select disk N
</code>
</pre>
                <p>Listando partições do disco selecionado:</p>
<pre>
<code class="language-powershell">
list partition
</code>
</pre>        
                <p>Selecione a partição, onde <b>X</b> é o número da partição:</p>
<pre>
<code class="language-powershell">
select partition X
</code>
</pre>           
                <p>Para remover a partição selecionada:</p>
<pre>
<code class="language-powershell">
delete partition override
</code>
</pre>                
                <p>Repita o processo para todas as partições que deseja deletar.</p>
                <blockquote>
                Por padrão, deixo apenas a unidade reservada do setor de boot e a unidade de instalação do Windows. Seja cuidadoso ao usar os comandos de exclusão!
                </blockquote>
                <!--Fim Diskpart-->

                <!--Conteudo Ubuntu-->
                <h2>Ubuntu</h2>
                <h3 id="errordpkg">Sub-process /usr/bin/dpkg returned an error code (1)</h3>
                <p>Ocorre quando tem interrupção na instalação de um programa. A solução abaixo é utilizado quando o erro e ocasionado pelo Java.</p>
<pre>
<code class="language-bash">
sudo rm -r /var/lib/dpkg/info/oracle*
sudo rm -r /var/cache/apt/archives/oracle*
</code>
</pre>
                <blockquote>
                O mesmo procedimento se aplica a outros pacotes, quando problema é o mesmo!
                </blockquote>
                <h3 id="openusb">Abrindo dispositivo USB na VM</h3>
                <p>Adicione o usuário ao grupo <code class="inline">vboxusers</code>.</p>
<pre>
<code class="language-bash">
sudo usermod -a -G vboxusers NOMEUSUARIO
</code>
</pre>
                <p>Após executar o comando acima, reinicie.</p>

                <h3 id="boot-repair">Boot Repair</h3>
                <p>Usamos para reparar o grub de forma fácil.</p>
<pre>
<code class="language-bash">
sudo add-apt-repository ppa:yannubuntu/boot-repair
sudo apt-get update
sudo apt-get install boot-repair
</code>
</pre>
                <p>Se após usar o Boot-repair o problema persistir, execute o comando abaixo no Windows 8/10, pelo cmd:</p>
<pre>
<code class="language-powershell">
bcdedit /set {bootmgr} path \EFI\ubuntu\shimx64.efi
</code>
</pre>
                <p>Reinicie para testar!</p>
                
                <p>Caso seja apresentado o erro <code class="inline">Failed to open \EFI\BOOT\grubx64.efi...</code>, use um live cd para executar o comando abaixo:</p>
<pre>
<code class="language-bash">
efibootmgr --create --label Ubuntu --disk /dev/sda1 --loader "\EFI\ubuntu\grubx64.efi"
</code>
</pre>                
                <p>Reinicie para testar!</p>
                <!--Fim conteudo Ubuntu-->

                <!--Conteudo data show-->
                <h2>Data Show</h2>
                <blockquote>Os passos abaixo se aplica ao data show MEC Urmet Daruma</blockquote>
                <h3 id="lampada">A lâmpada não liga/funciona</h3>
                <p>Com um clips de papel deformado, clique uma vez no orifício entre as palavras lamp e temp para que a lâmpada comece a projetar.</p>

                <p>Altere ou confirme as configurações abaixo:</p>

                <p>1 - Menu &gt; Avançado &gt; Modo de espera &gt; Ativar - reinicie;</p>

                <p>2 - Menu &gt; Avançado &gt; USB Type &gt; LINK 21L;</p>

                <p>3 - Desligue e ligue novamente.</p>

                <p>Pronto.</p>
                <!--Fim conteudo data show-->

                <!--Conteudo rede-->
                <h2>Rede</h2>
                <h3 id="hostname">Descobrindo o hostname pelo IP</h3>
                <p>No Ubuntu:</p>
                <p>Tenha o <code>samba</code> instalado.</p>
<pre>
<code class="language-bash">
nmblookup -A IP_DESTINO
</code>
</pre>
                <p>No Windows:</p>
<pre>
<code class="language-powershell">
nbtstat -a IP_DESTINO
</code>
</pre>
                <!--Fim conteudo rede-->

            </section>

        </div>
    </main>

<?php
    include('../topo.php');
    include('../footer.php');
?>