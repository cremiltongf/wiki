<?php 
    include('../header.php');
?>

    <main>
        <div class="intro">
            
            <nav class="nav">
                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Fechar</a></p>
                <ul>
                    <li class="nav-title">Clonagem</li>
                    <li class="nav-title">Windows</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#autocad">Ativar o AutoCAD</a></li>
                        <li><a href="#dominio">Adicionar o pc no domínio</a></li>
                        <li><a href="#timefreeze">Ativar o Toolwiz Time Freeze</a></li>
                    </ul>
                    <li class="nav-title">Ubuntu</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#hostname">Alterar o hostname</a></li>
                    </ul>
                </ul>
            </nav>
            
            <section class="content-main">

                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Menu</a></p>

                <menu class="nav-intro">
                    <?php include('../menu.php');?>
                </menu>

                <h1>Clonagem</h1>

                <h2>Windows</h2>

                <!--Conteudo clone-->
                <h3 id="autocad">Ativar o AutoCAD</h3>

                <p>Execute o
                    <code class="inline">AutoCAD</code>(necessário internet) e siga os passos que aparecer na tela e, informe a <a href="https://docs.google.com/spreadsheets/d/1RaX8ubdo7RuoA8qhwZAWh6ZgoTQsC_E37R8E-21wkHQ/edit#gid=0">chave de ativação</a> caso solicitado.</p>
                <p>Em caso de erro na ativação, remover a pasta <code class="inline">FLEXnet</code> que fica localizado em <code class="inline">C:\ProgramData</code> e, execute o programa novamente.</p>

                <h3 id="dominio">Adicionar o pc no domínio</h3>
                <p>Altere o <b>Nome do Computador</b> e o <b>Grupo de trabalho</b> conforme o laboratório.</p>
<pre>
<code class="language-powershell">
AD=192.168.0.11

Nome: lab1pc01
Grupo de Trabalho: LAB01
Grupo de Trabalho: ensino.umuarama.local

Nome: lab2pc01
Grupo de Trabalho: LAB02
Grupo de Trabalho: ensino.umuarama.local

Nome: lab3pc01
Grupo de Trabalho: LAB03
Grupo de Trabalho: ensino.umuarama.local

Nome: lab4pc01
Grupo de Trabalho: LAB04
Grupo de Trabalho: ensino.umuarama.local

Nome: lab5pc01
Grupo de Trabalho: LAB05
Grupo de Trabalho: ensino.umuarama.local
</code>
</pre>

                <h3 id="timefreeze">Ativar o Toolwiz Time Freeze</h3>

                <p>Por último, ative o Toolwiz Time Freeze, acessando o programa pelo menu iniciar e autenticando com a senha disponível na <a href="https://docs.google.com/spreadsheets/d/1fy0uAfY2VM9k6uUoH4qw1qEIJgToc--lY9x-b8CqoZo/edit?usp=sharing">planilha</a>.</p>

                <h2>Ubuntu</h2>
                <h3 id="hostname">Alterar hostname</h3>
                <p>Altere o nome do computador em <code class="inline">/etc/hostname</code> e <code class="inline">/etc/hosts</code></p>
<pre>
<code class="language-bash">
sudo vi /etc/hostname
sudo vi /etc/hosts
</code>
</pre>
                <p>A nomenclatura é o mesmo utilizado no <a href="#dominio">Windows</a>, de acordo com o Laboratório.</p>
                <!--Fim conteudo clone-->

            </section>

        </div>
    </main>

<?php
    include('../topo.php');
    include('../footer.php');
?>