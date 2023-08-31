<div id="preImportacaoUsuarios">
    <?php $this->load->helper('form'); ?>
    <div class="s12 m4 l8">
        <nav>
            <div class="nav-wrapper bg-secundaria">
                <div class="col s12">
                    <a class="breadcrumb white-text" href="<?php base_url("Importacao")?>">Importação (Aviso)</a>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col s12">
                <p class="flow-text">
                <blockquote>
                    <h5><strong> Atenção: Aviso de pré-importação </strong></h5>

                    <p> Antes de prosseguir com a importação, é necessário realizar uma
                        etapa
                        importante para garantir a integridade dos dados. Nós identificamos que já existem registros
                        cadastrados no banco de dados atual do sistema. Para evitar conflitos e garantir que sua
                        importação
                        seja bem-sucedida, é necessário apagar todos os registros existentes antes de prosseguir com a
                        importação do novo arquivo CSV.</p>

                    <p><strong>Atenção:</strong> Ao selecionar a opção de apagar os registros, todas as informações
                        atualmente armazenadas no sistema serão permanentemente excluídas. Certifique-se de ter feito o
                        backup necessário, pois essa ação não poderá ser desfeita.</p>

                    <h6>Como proceder:</h6>
                    <ol>
                        <li>Selecione a opção desejada abaixo:</li>
                        <ul>
                            <li><strong>"Apagar todos os registros e continuar com a importação."</strong></li>
                            <li><strong>"Voltar à Tela Inicial sem apagar os registros."</strong></li>
                        </ul>
                    </ol>

                    <p>Lembre-se de que esta etapa é essencial para manter a integridade dos dados e evitar duplicações
                        ou
                        inconsistências. Estamos aqui para ajudar em todo o processo, então se você tiver alguma dúvida
                        ou
                        preocupação, não hesite em entrar em contato com nossa equipe de suporte.</p>

                    <p>Obrigado por escolher nosso sistema para a gestão de dados. Por favor, selecione uma das opções
                        acima
                        para continuar.
                    </p>

                    <div>
                        <a href="<?php base_url("")?> Home" class="waves-effect waves-light btn btn-primaria"
                            name="importarSubmit"><i class="material-icons left">arrow_back
                            </i>Voltar à Tela Inicial</a>

                        <a href="#modalAviso" class="waves-effect waves-light btn modal-trigger btn-secundaria"
                            name="importarSubmit"><i class="material-icons left">delete
                            </i>Apagar todos os registros</a>

                    </div>
                    </p>
                </blockquote>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modalAviso" class="modal">
            <div class="modal-header">
                <h4><strong>Atenção! &#9888</strong></h4>
            </div>
            <div class="modal-content">
                <p>
                    Após a confirmação, você removerá todos os usuários cadastrados no sistema, deseja mesmo realizar
                    esta
                    ação?
                </p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect bg-primaria btn-flat white-text"><i
                        class="material-icons right">close</i>Cancelar</a>
                <a href="#!" class="modal-close waves-effect bg-secundaria btn-flat white-text"
                    @click="confirmaDelecao()"><i class="material-icons right">check</i>Confirmar</a>
            </div>
        </div>
    </div>
</div>
