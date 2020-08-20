<?php 
    include('../header.php');
?>

    <main>
        <div class="intro">
            
            <nav class="nav">
                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Fechar</a></p>
                <ul>
                    <li class="nav-title">Veyon</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#executando">Executando comandos no cliente</a></li>
                    </ul>

                    <li class="nav-title">Toolwiz Time Freeze</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#desabilitar">Descongelando o SO</a></li>
                        <li><a href="#habilitando">Congelando o SO</a></li>
                        <li><a href="#status">Checar o status</a></li>
                    </ul>

                    <li class="nav-title">Testes</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#atalhos">Atalhos de programas</a></li>
                    </ul>
                </ul>
            </nav>
            
            <section class="content-main">

                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Menu</a></p>
                
                <menu class="nav-intro">
                    <?php include('../menu.php');?>
                </menu>

                <h1>Scripts</h1>

                <!--Conteudo Veyon-->
                <h2>Veyon</h2>
                <p>Através do <a href="https://veyon.io">Veyon</a> podemos executar programas ou scripts nos computadores clientes.</p>
                <h3 id="executando">Executando comandos no cliente</h3>
                <p>Usaremos muito o comando abaixo:</p>
<pre>
<code class="language-powershell">
cmd /k
</code>
</pre>
                <p>Mais detalhes sobre <a href="https://ss64.com/nt/cmd.html">cmd /k</a>.</p>
                <p>Exemplos:</p>
                <p>Executando um <code class="inline">bat</code>:</p>
<pre>
<code class="language-powershell">
cmd /k "C:\Users\aluno\Desktop\software\tools.bat"
</code>
</pre>
                <p>Atualizando as GPOs nos pcs clientes:</p>
<pre>
<code class="language-powershell">
cmd /k "gpupdate /force"
</code>
</pre>
                <!--Fim conteudo Veyon-->

                <!--Toolwiz Time Freeze-->
                <h2>Toolwiz Time Freeze</h2>
                <p>É o software responsável por congelar o Sistema Operacional Windows.</p>
                <h3 id="desabilitar">Descongelando o SO</h3>
<pre>
<code class="language-powershell">
cmd /k "C:\Program Files\Toolwiz Time Freeze 2017\ToolwizTimeFreeze.exe" /unfreeze /usepass=SENHA
</code>
</pre>                
                <h3 id="habilitando">Congelando o SO</h3>
<pre>
<code class="language-powershell">
cmd /k "C:\Program Files\Toolwiz Time Freeze 2017\ToolwizTimeFreeze.exe" /freezealways /usepass=SENHA
</code>
</pre>
                <h3 id="status">Checar o status</h3>
<pre>
<code class="language-powershell">
cmd /k "C:\Program Files\Toolwiz Time Freeze 2017\ToolwizTimeFreeze.exe" /check /usepass=SENHA
</code>
</pre>
                <!--Fim Toolwiz Time Freeze-->

                 <!--Atalhos de programas-->
                <h2 id="atalhos">Testes</h2>
                <p>Caminhos de programas para testes.</p>
<pre>
<code class="language-powershell">
#AutoCAD2018
"C:\Program Files\Autodesk\AutoCAD 2018\acad.exe"  /product ACAD /language "pt-BR"

#DBDesigner4
"C:\Program Files (x86)\fabFORCE\DBDesigner4.exe"

#IReport
"C:\Program Files (x86)\Jaspersoft\iReport-5.6.0\bin\ireport.exe"

#Netbeans
"C:\Program Files\NetBeans 8.2\bin\netbeans64.exe"

#Firefox
"C:\Program Files\Mozilla Firefox\firefox.exe"

#Chrome
"C:\Program Files (x86)\Google\Chrome\Application\chrome.exe"

#VirtualBox
"C:\Program Files\Oracle\VirtualBox\VirtualBox.exe"

#Scratch
"C:\Program Files (x86)\Scratch 2\Scratch 2.exe"

#VSCode
"C:\Program Files\Microsoft VS Code\Code.exe"

#Cisco Packet Tracer
"C:\Program Files (x86)\Cisco Packet Tracer 6.2sv\bin\PacketTracer6.exe"

#SketchUp
"C:\Program Files\SketchUp\SketchUp 2016\SketchUp.exe"

#LibreOffice
"C:\Program Files\LibreOffice\program\soffice.exe"
</code>
</pre>             
                <!--Fim atalhos de programas-->

            </section>

        </div>
    </main>

<?php
    include('../topo.php');
    include('../footer.php');
?>