<?php 
    include('../header.php');
?>

    <main>
        <div class="intro">
            
            <nav class="nav">
                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Fechar</a></p>
                <ul>
                    <li class="nav-title">Informações LAB</li>
                    <ul class="intro-ul toggle-menu">
                        <li><a href="#pro-win">Programas do Windows</a></li>
                        <li><a href="#pro-ubu">Programas do Ubuntu</a></li>
                        <li><a href="#doc-lab">Documentação LAB</a></li>
                        <li><a href="#regulamento">Regulamento</a></li>
                        <li><a href="#chamados">Chamados - HelpDesk</a></li>
                    </ul>
                </ul>
            </nav>
            
            <section class="content-main">

                <p class="hidden-btn"><a href="#" class="toggle-menu btn-menu">Menu</a></p>

                <menu class="nav-intro">
                    <?php include('../menu.php');?>
                </menu>
 
                <!--DOC-->
                <h1>Informações LAB</h1>
                <h2 id="pro-win">Programas do Windows</h2>
                <p><a href="windows-public.pdf">Lista de programas disponibilizados</a> no Windows.</p>
                
                <h2 id="pro-ubu">Programas do Ubuntu</h2>
                <p><a href="ubuntu-public.pdf">Lista de programas disponibilizados</a> no Ubuntu.</p>

                <h2 id="doc-lab">Documentação</h2>
                <p><a href="documentacao.pdf">Documentação completa</a> dos Laboratórios de Informática.</p>

                <blockquote>
                    Número de máquinas por laboratório e demais configurações do hardware estão disponíveis neste documento.
                </blockquote>

                <h2 id="regulamento">Regulamento</h2>
                <p><a href="regulamento.pdf">Regulamento de uso</a> dos Laboratórios de Informática.</p>
                <blockquote>
                    As recomendações e boas práticas de uso do ambiente estão disponíveis neste documento.
                </blockquote>

                <h2 id="chamados">Chamados - HelpDesk</h2>
                <p>
                <strong>Problemas</strong>(hardware ou software), instalação ou atualização de software, devem ser demandados através de chamados via <a href="https://helpdesk.ifpr.edu.br">HelpDesk</a>.
                </p>
                <p>Em caso de dúvidas, consulte o <a href="helpdesk.pdf">manual de abertura de chamados</a>.</p>
                <!--Fim DOC-->

            </section>

        </div>
    </main>

<?php
    include('../topo.php');
    include('../footer.php');
?>
