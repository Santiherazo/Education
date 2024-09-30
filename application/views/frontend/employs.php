<!----- Page Title Start ----->
<section class="edu_page_title_wrapper" style="padding: 20px 0;"> <!-- Reducción del padding superior e inferior -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="edu_page_title_text">
                    <h1><?php echo html_escape($this->common->languageTranslator('ltr_our_gallery'));?></h1>
                    <ul>
                        <li><a href="<?php base_url();?>"><?php echo html_escape($this->common->languageTranslator('ltr_home'));?></a></li>
                        <li><a href="javascript:void(0);"><?php echo html_escape($this->common->languageTranslator('ltr_our_gallery'));?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!----- Page Title End ----->

<!----- Formulario de Contratación Start ----->
<section class="edu_page_title_wrapper"> <!-- Ajuste del padding -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 col-12 p-0">
                <div class="emp_form_container" style="background: white;"> <!-- Ajuste de padding en el formulario -->
                    <h4><?php echo !empty($frontend_details[0]['cont_form_heading']) ? $frontend_details[0]['cont_form_heading'] : 'Enviar Propuesta'; ?></h4>
                    
                    <!-- Formulario -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Campo Nombre -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="edu_field_holder">
                                    <input type="text" class="edu_form_field require" placeholder="Nombre *" name="name" required>
                                </div>
                            </div>
                            
                            <!-- Campo Correo Electrónico -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="edu_field_holder">
                                    <input type="email" class="edu_form_field require" placeholder="Correo Electrónico *" name="email" required>
                                </div>
                            </div>
                            
                            <!-- Campo Asunto -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="edu_field_holder">
                                    <input type="text" class="edu_form_field require" placeholder="Asunto *" name="subject" required>
                                </div>
                            </div>
                            
                            <!-- Campo Teléfono -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="edu_field_holder">
                                    <input type="text" class="edu_form_field require" placeholder="Teléfono *" name="mobile" maxlength="12" required>
                                </div>
                            </div>
                            
                            <!-- Campo Comentarios -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="edu_field_holder">
                                    <textarea class="edu_form_field require" placeholder="Comentarios" name="message" required></textarea>
                                </div>
                            </div>
                            
                            <!-- Subir CV en formato PDF -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="edu_field_holder">
                                    <label for="file">Subir CV (Formato PDF):</label>
                                    <input type="file" class="edu_form_field" id="file" name="file" accept="application/pdf" required>
                                    <small>Formato permitido: PDF</small>
                                </div>
                            </div>
                            
                            <!-- Botones Enviar y Cancelar -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start">
                                <button type="submit" class="edu_btn enquiryFormSubmit">Enviar Propuesta</button>
                                <button type="button" class="edu_btn btn_cancel">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS Inline -->
<style>
    .edu_page_title_wrapper {
        padding: 20px 0; /* Ajuste del padding */
        background-color: #f8f9fa;
    }

    .edu_form_container {
        padding: 20px; /* Ajuste del padding */
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fff;
    }

    .edu_field_holder {
        margin-bottom: 15px;
    }

    .edu_form_field {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .edu_btn {
        padding: 10px 20px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    .btn_cancel {
        background-color: #888;
    }

    .d-flex {
        display: flex;
    }

    .justify-content-start {
        justify-content: flex-start;
    }
</style>