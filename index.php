<?php include(__DIR__ . '/includes/header.php'); ?>

<div class="container-fluid btn-open-modal">
    <div class="row">
        <div class="col text-center">
            <button type="button" class="btn btn-dark mt-2" data-toggle="modal" data-target="#imageModal">
                Enviar arquivo
            </button>
        </div>
    </div>
</div>

<div class="yiitk-nox-media-manager">
    <!-- Modal -->
    <div class="modal fade show" style="display: block" id="imageModal" tabindex="-1" role="dialog"
         aria-labelledby="imageUpload" aria-hidden="true">
        <div class="modal-dialog modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="imageUpload">Selecionar Arquivo</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <ul class="nav nav-tabs" id="filesTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="files-tab" data-toggle="tab" href="#files" role="tab"
                               aria-controls="files" aria-selected="false">
                                Enviar arquivos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="medias-tab" data-toggle="tab" href="#medias" role="tab"
                               aria-controls="medias" aria-selected="true">
                                Biblioteca de mídia
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="TabContent">
                        
                        <div class="tab-pane fade" id="files" role="tabpanel" aria-labelledby="files-tab">
                            <div class="container-fluid py-3">
                                <div class="row">
                                    <div class="col text-center py-5">
                                        <h6 class="upload-instructions drop-instructions">Solte os arquivos em qualquer
                                            lugar para fazer enviar</h6>
                                        <p class="upload-instructions drop-instructions">ou</p>
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload-file">Selecionar arquivos</button>
                                            <input type="file" name="sendfile"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row warning justify-content-center">
                                <div class="col col-4">
                                    <div class="alert alert-danger text-center" role="alert">
                                        <h3 class="badge badge-danger">Atenção</h3>
                                        <p>
                                            A largura da imagem deve ter pelo menos 2000px.
                                        </p>
                                        <p>
                                            A altura da imagem deve ter pelo menos 440px.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade show active" id="medias" role="tabpanel" aria-labelledby="medias-tab">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            
                                            <div class="col col-12 col-md-8 col-lg-9 py-3 info-files">
                                                <div class="row">
                                                    <div class="col">
                                                        <form class="media-search" id="mediaSearch" action="#"
                                                              method="POST">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <select class="form-control form-control-sm"
                                                                            id="media-attachment-filters">
                                                                        <option value="all">Todas as imagens</option>
                                                                        <option value="uploaded">Anexadas a esta
                                                                            página
                                                                        </option>
                                                                        <option value="image/jpeg">image/jpeg</option>
                                                                        <option value="image/png">image/png</option>
                                                                        <option value="unattached">Não anexadas</option>
                                                                        <option value="mine">Minhas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <select class="form-control form-control-sm"
                                                                            id="media-attachment-date-filters">
                                                                        <option value="all">Todas as datas</option>
                                                                        <option value="0">abril 2019</option>
                                                                        <option value="1">março 2019</option>
                                                                        <option value="2">fevereiro 2019</option>
                                                                        <option value="3">janeiro 2019</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <input type="text" value="" maxlength="100"
                                                                           class="form-control form-control-sm"
                                                                           name="mediaSearch" id="mediaSearch"
                                                                           placeholder="Pesquisar itens de mídia">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-12 col-lg-6 d-none">
                                                        <div class="card bg-light mb-3">
                                                            <div class="card-header text-center py-1">Aviso</div>
                                                            <div class="card-body text-center py-1">
                                                                <h5 class="card-title mb-0">logo-horus-400x400.png</h5>
                                                                <p class="card-text mb-0">A largura da imagem deve ter
                                                                    pelo menos 2000px.</p>
                                                                <p class="card-text mb-0">A altura da imagem deve ter
                                                                    pelo menos 440px.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="attachments" id="attachments">
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-word file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-pdf file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <i class="fas fa-file-audio file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-archive file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-word file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-pdf file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <i class="fas fa-file-audio file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <i class="fas fa-file-archive file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-word file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file-pdf file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <i class="fas fa-file-audio file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <i class="fas fa-file file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment selected">
                                                                <i class="fas fa-file-archive file-type"></i>
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-horus-400x400.png" alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                            <li aria-label="Thelema Brasil" class="attachment restrict">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <button type="button" class="check" tabindex="0">
                                                                    <i class="fas fa-check-circle checked"></i>
                                                                    <i class="fas fa-minus-circle uncheck"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div
                                                class="col d-none d-md-block col-12 col-md-4 col-lg-3 border-left bg-light pt-2 px-2 info-details">
                                                <div class="row details">
                                                    <div class="col">
                                                        <div class="card text-center">
                                                            <div class="card-header font-weight-bold">
                                                                DETALHES DO ANEXO
                                                            </div>
                                                            <div class="card-body py-2">
                                                                <img src="/assets/img/logo-footer-espaco-novo-aeon.png"
                                                                     alt="">
                                                                <span
                                                                    class="file-name">logo-footer-espaco-novo-aeon.png</span>
                                                                <span class="date">17 de agosto de 2018</span>
                                                                <span class="size">523 KB</span>
                                                                <span class="dimensions">2000 por 704 píxeis</span>
                                                                <a class="edit" href="#" data-toggle="modal"
                                                                   data-target="#editModal" title="Editar imagem">Editar
                                                                    imagem</a>
                                                                <button type="button"
                                                                        class="button-link delete-attachment">Excluir
                                                                    permanentemente
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                        <hr>
                                                        
                                                        <form class="image-detail px-2" id="" method="#">
                                                            <div class="form-group row">
                                                                <label for="url"
                                                                       class="col-sm-2 col-form-label form-control-sm">URL</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                           class="form-control form-control-sm" id="url"
                                                                           placeholder="https://www.thelema.com.br/assets/img/thumb.jpg"
                                                                           readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="title"
                                                                       class="col-sm-2 col-form-label form-control-sm">Título</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                           class="form-control form-control-sm"
                                                                           id="title" placeholder="Título">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="label"
                                                                       class="col-sm-2 col-form-label form-control-sm">Legenda</label>
                                                                <div class="col-sm-10">
                                                                    <textarea class="form-control" id="label"
                                                                              rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="altText"
                                                                       class="col-sm-2 col-form-label form-control-sm">Alternativo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                           class="form-control form-control-sm"
                                                                           id="altText" placeholder="Texto Alternativo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="description"
                                                                       class="col-sm-2 col-form-label form-control-sm">Descrição</label>
                                                                <div class="col-sm-10">
                                                                    <textarea class="form-control" id="description"
                                                                              rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="config">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h5 class="text-center">CONFIGURAÇÕES DE
                                                                            EXIBIÇÃO DO ANEXO</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="align"
                                                                           class="col-sm-2 col-form-label form-control-sm">Alinhar</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control form-control-sm"
                                                                                id="align">
                                                                            <option value="Esquerda">Esquerda</option>
                                                                            <option value="Direita">Direita</option>
                                                                            <option value="Centro">Centro</option>
                                                                            <option value="Nenhum">Nenhum</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="link"
                                                                           class="col-sm-2 col-form-label form-control-sm">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <select
                                                                            class="form-control form-control-sm mb-2"
                                                                            id="link">
                                                                            <option value="Nenhum">Nenhum</option>
                                                                            <option value="Arquivo de mídia">Arquivo de
                                                                                mídia
                                                                            </option>
                                                                            <option value="Página de anexo">Página de
                                                                                anexo
                                                                            </option>
                                                                            <option value="URL personalizado">URL
                                                                                personalizado
                                                                            </option>
                                                                        </select>
                                                                        <input type="text"
                                                                               class="form-control form-control-sm"
                                                                               id="url"
                                                                               placeholder="https://www.thelema.com.br/assets/img/thumb.jpg"
                                                                               readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="size"
                                                                           class="col-sm-2 col-form-label form-control-sm">Tamanho</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control form-control-sm"
                                                                                id="size">
                                                                            <option value="Tam. completo 75 x 75">Tam.
                                                                                completo 75 x 75
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                
                </div>
                <div class="modal-footer fixed-bottom bg-white justify-content-center">
                    <button type="button" class="btn btn-light mr-4" data-dismiss="modal" aria-label="Fechar">Cancelar
                    </button>
                    <button type="button" class="btn btn-info ml-4">Selecionar</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="imageUpload" aria-hidden="true">
        <div class="modal-dialog modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="imageUpload">Editar imagem</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    
                                    <div class="col col-12 col-md-8 col-lg-9 py-3">
                                        
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="card bg-light mb-3">
                                                    <div class="card-header text-center py-1">Aviso</div>
                                                    <div class="card-body text-center py-1">
                                                        <h5 class="card-title mb-0">logo-horus-400x400.png</h5>
                                                        <p class="card-text mb-0">A largura da imagem deve ter pelo
                                                            menos 2000px.</p>
                                                        <p class="card-text mb-0">A altura da imagem deve ter pelo menos
                                                            440px.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div
                                        class="col d-none d-md-block col-12 col-md-4 col-lg-3 border-left bg-light pt-2 px-2 info-details">
                                        <div class="row details">
                                            <div class="col">
                                                <div class="card text-center">
                                                    <div class="card-header font-weight-bold">
                                                        REDIMENSIONAR A IMAGEM
                                                    </div>
                                                    <div class="card-body py-2">
                                                        <img src="/assets/img/logo-footer-espaco-novo-aeon.png" alt="">
                                                        <span class="file-name">logo-footer-espaco-novo-aeon.png</span>
                                                        <span class="date">17 de agosto de 2018</span>
                                                        <span class="size">523 KB</span>
                                                        <span class="dimensions">2000 por 704 píxeis</span>
                                                        <a class="edit" href="#" data-toggle="modal"
                                                           data-target="#editModal" title="Editar imagem">Editar
                                                            imagem</a>
                                                        <button type="button" class="button-link delete-attachment">
                                                            Excluir permanentemente
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                
                                                <form class="image-detail px-2" id="" method="#">
                                                    <div class="form-group row">
                                                        <label for="url"
                                                               class="col-sm-2 col-form-label form-control-sm">URL</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-sm"
                                                                   id="url"
                                                                   placeholder="https://www.thelema.com.br/assets/img/thumb.jpg"
                                                                   readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="title"
                                                               class="col-sm-2 col-form-label form-control-sm">Título</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-sm"
                                                                   id="title" placeholder="Título">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="label"
                                                               class="col-sm-2 col-form-label form-control-sm">Legenda</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" id="label"
                                                                      rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="altText"
                                                               class="col-sm-2 col-form-label form-control-sm">Alternativo</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-sm"
                                                                   id="altText" placeholder="Texto Alternativo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="description"
                                                               class="col-sm-2 col-form-label form-control-sm">Descrição</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" id="description"
                                                                      rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="config">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="text-center">CONFIGURAÇÕES DE EXIBIÇÃO DO
                                                                    ANEXO</h5>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="align"
                                                                   class="col-sm-2 col-form-label form-control-sm">Alinhar</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control form-control-sm" id="align">
                                                                    <option value="Esquerda">Esquerda</option>
                                                                    <option value="Direita">Direita</option>
                                                                    <option value="Centro">Centro</option>
                                                                    <option value="Nenhum">Nenhum</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="link"
                                                                   class="col-sm-2 col-form-label form-control-sm">Link</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control form-control-sm mb-2"
                                                                        id="link">
                                                                    <option value="Nenhum">Nenhum</option>
                                                                    <option value="Arquivo de mídia">Arquivo de mídia
                                                                    </option>
                                                                    <option value="Página de anexo">Página de anexo
                                                                    </option>
                                                                    <option value="URL personalizado">URL
                                                                        personalizado
                                                                    </option>
                                                                </select>
                                                                <input type="text" class="form-control form-control-sm"
                                                                       id="url"
                                                                       placeholder="https://www.thelema.com.br/assets/img/thumb.jpg"
                                                                       readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="size"
                                                                   class="col-sm-2 col-form-label form-control-sm">Tamanho</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control form-control-sm" id="size">
                                                                    <option value="Tam. completo 75 x 75">Tam. completo
                                                                        75 x 75
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            
                                            </div>
                                        </div>
                                    
                                    </div>
                                
                                </div>
                            
                            </div>
                        </div>
                    </div>
                
                </div>
            
            </div>
            <div class="modal-footer fixed-bottom bg-white">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Fechar">Cancelar
                </button>
                <button type="button" class="btn btn-dark" disabled>Selecionar</button>
            </div>
        </div>
    </div>
</div>


<?php include(__DIR__ . '/includes/footer.php'); ?>
