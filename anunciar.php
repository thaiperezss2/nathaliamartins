<?php
require_once('./operacoes.php');
include('./navbar.php'); 
require_once('./conexao.php');
?>
    <div class="container">
        <?php
        include './alertas.php';
        ?>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-3"> Anunciar Seu Serviço</h2>

                <div class="d-flex justify-content-center">
                    <form action="acaoanunciar.php" method="POST" class="w-50" enctype="multipart/form-data">
                        <p class="mb-5">Todos os campos com <small class="text-danger">*</small> são obrigatórios.</p>
                        <div class="mb-3">
                            <label for="file" class="form-label">Procure sua imagem <small class="text-danger">*</small></label>
                            <input type="file" id="file" name="file" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Descrição do seu serviço <small class="text-danger">*</small></label>
                            <textarea name="descricao"  placeholder="descrição" cols="80" class="textarea" rows="15"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Preço do serviço <small class="text-danger">*</small></label>
                            <input type="text" name="preco" class="form-control moeda" required placeholder="Preço do serviço" />
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Seu contato <small class="text-danger">*</small></label>
                            <input type="text" name="telefone" class="form-control telefone" required placeholder="Telefone">
                        </div>
                        
                        <button class="btn btn-dark" type="submit" name="submit">Enviar anuncio</button>
                    </form>
                </div>
            </div>
        </div>
        
        <hr>

        <script src="vendor/tinymce/tinymce/tinymce.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mask.min.js"></script>
        <script src="js/maskbrphone.js"></script>
        <script src="js/scripts.js"></script>
    
        <script>
            var useDarkMode = false;

            tinymce.init({
            selector: 'textarea.textarea',
            language: 'pt_BR',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                { title: 'Minha página', value: 'uploads/tinymce' }
            ],
            image_list: [
                { title: 'Minha página', value: 'uploads/tinymce' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            templates: [
                    { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 300,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <?php
    include './footer.php';