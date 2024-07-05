<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title><?php echo getenv('APP')?></title>
    <style>
        * {
            font-family: "Roboto", sans-serif;
        }

        .subtitle {
            font-size: 23px;
            font-weight: 300;
        }

        .form-control.error input {
            border-color: #e74c3c;
        }

        .form-control.success input {
            border-color: #2ecc71;
        }

        .form-control small {
            color: #e74c3c;
            position: absolute;
            bottom: -15px;
            left: 0;
            visibility: hidden;
        }

        .form-control.error small {
            visibility: visible;
        }
    </style>
</head>
<body>

<div class="container my-4">

    <div class="log d-flex flex-column justify-content-center align-items-center">
        <img src="../img/log.png" alt="" width="300px" srcset="">
        <p class="my-3 subtitle"><?php echo getenv('TITLE')?></p>
    </div>

    <form action="/store" method="post" class="my-4">
        <div class="module_1">
            <h3>1. Dados Pessoais</h3>
            <div class="row my-2">
                <div class="col-md-8 mb-3">
                    <label for="nome-completo">Nome Completo</label>
                    <input type="text" id="nome-completo" name="nome_completo"
                           class="form-control" placeholder="Nome Completo">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="naturalidade">Naturalidade</label>
                    <input type="text" id="naturalidade" name="naturalidade" class="form-control"
                           placeholder="Naturalidade">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6 mb-3">
                    <label for="nome-pai">Nome do Pai</label>
                    <input type="text" id="nome-pai" name="nome_pai" class="form-control" placeholder="Nome do Pai"
                    >
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nome-mae">Nome da Mãe</label>
                    <input type="text" id="nome-mae" name="nome_mae" class="form-control" placeholder="Nome da Mãe"
                    >
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4 mb-3">
                    <label for="nascimento">Data de Nascimento</label>
                    <input type="date" id="nascimento" name="nascimento" class="form-control">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="rg">RG</label>
                    <input type="text" id="rg" name="rg" class="form-control" placeholder="RG">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6 mb-3">
                    <label for="tipo-sanguineo">Tipo Sanguíneo</label>
                    <input type="text" id="tipo-sanguineo" name="tipo_sanguineo" class="form-control"
                           placeholder="Tipo Sanguíneo">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone"
                    >
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12 mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço"
                    >
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4 mb-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" class="form-control" placeholder="Número">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
        </div>
        <div class="my-4">
            <p>
                Laudo médico (emitido por um médico especialista em transtorno do espectro autista - PDF, PNG, JPG) -
                MÁX 10MB
            </p>
        </div>
        <div class="my-2">
            <div class="input-group is-invalid">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary rounded-left" disabled type="button">Upload</button>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile">
                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Browse</label>
                </div>
            </div>
        </div>
        <div class="show-file d-none my-4 align-items-center justify-content-center" style="height: 300px;">
            <div class="canva d-flex rounded"
                 style="height: 100%; width: 300px; box-shadow: 0px 0px 3px 3px #dbdbdb; align-items: center; justify-content: center;">
                <p id="preview-text">Pré-visualização</p>
                <img id="image-preview" style="display:none; max-height:100%; max-width:100%;"/>
                <embed id="pdf-preview" type="application/pdf" style="display:none; height:100%; width:100%;"/>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <label for="responsavel-legal">Possui responsável legal?</label>
                <input type="text" id="responsavel-legal" name="responsavel_legal" class="form-control"
                       placeholder="Sim, possuo!">
                <small class='d-none msg-erro'>Mensagem de erro</small>
            </div>
        </div>
        <hr class="my-4 ">
        <div class="module_2 my-4">
            <h3>2. Dados do Responsável</h3>
            <div class="row my-2">
                <div class="col-12 mb-3">
                    <label for="nome-responsavel">Nome do Responsável</label>
                    <input type="text" id="nome-responsavel" name="nome_responsavel" class="form-control"
                           placeholder="Nome do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6 mb-3">
                    <label for="cpf-responsavel">CPF do Responsável</label>
                    <input type="text" id="cpf-responsavel" name="cpf_responsavel" class="form-control"
                           placeholder="CPF do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="orgao-exp-responsavel">Órgão Expeditor do Responsável</label>
                    <input type="text" id="orgao-exp-responsavel" name="orgao_exp_responsavel" class="form-control"
                           placeholder="Órgão Expeditor do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12 mb-3">
                    <label for="endereco-responsavel">Endereço do Responsável</label>
                    <input type="text" id="endereco-responsavel" name="endereco_responsavel" class="form-control"
                           placeholder="Endereço do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-8 mb-3">
                    <label for="bairro-responsavel">Bairro do Responsável</label>
                    <input type="text" id="bairro-responsavel" name="bairro_responsavel" class="form-control"
                           placeholder="Bairro do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="telefone-responsavel">Telefone do Responsável</label>
                    <input type="text" id="telefone-responsavel" name="telefone_responsavel" class="form-control"
                           placeholder="Telefone do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-9 mb-3">
                    <label for="cidade-responsavel">Cidade do Responsável</label>
                    <input type="text" id="cidade-responsavel" name="cidade_responsavel" class="form-control"
                           placeholder="Cidade do Responsável">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="estado-responsavel">Estado</label>
                    <input type="text" id="estado-responsavel" name="estado_responsavel" class="form-control"
                           placeholder="Estado">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
            <div class="my-4">
                <p>
                    Procuração (assinada pelo responsável legal - PDF, PNG, JPG) - MÁX 10MB
                </p>
            </div>
            <div class="my-2">
                <div class="input-group is-invalid">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary rounded-left" disabled type="button">Upload</button>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedInputGroupCustomFileProcuracao"
                        >
                        <label class="custom-file-label" for="validatedInputGroupCustomFileProcuracao">Browse</label>
                    </div>
                </div>
            </div>
            <div class="show_procuracao-file my-4 d-none align-items-center justify-content-center"
                 style="height: 300px;">
                <div class="canva d-flex rounded"
                     style="height: 100%; width: 300px; box-shadow: 0px 0px 3px 3px #dbdbdb; align-items: center; justify-content: center;">
                    <p id="preview-text-procuracao">Pré-visualização</p>
                    <img id="image-preview-procuracao" style="display:none; max-height:100%; max-width:100%;"/>
                    <embed id="pdf-preview-procuracao" type="application/pdf"
                           style="display:none; height:100%; width:100%;"/>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="repetir-email">Repetir Email</label>
                    <input type="email" id="repetir-email" name="repetir_email" class="form-control"
                           placeholder="Repetir Email">
                    <small class='d-none msg-erro'>Mensagem de erro</small>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-info col">Enviar dados</button>
    </form>

    <div class="log d-flex flex-column justify-content-center align-items-center">
        <img src="../img/gov.png" alt="" width="300px" srcset="">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function () {
        $('#cpf, #cpf-responsavel').mask('000.000.000-00');
        $('#telefone, #telefone-responsavel').mask('(00) 00000-0000');
        $('#cep').mask('00000-000');
    });

    $("#cep").keyup(function () {
        let countNumer = (this).value.replace(/[^a-z0-9]/gi, "");
        if (countNumer.length == 8) {
            fetch("https://viacep.com.br/ws/" + (this).value + "/json/")
                .then(function (response) {
                    return response.json();
                })
                .then(function (response) {
                    $("#bairro").val(response.bairro)
                    $("#endereco").val(response.logradouro)
                });
        }
    });

    document.getElementById('validatedInputGroupCustomFile').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const previewText = document.getElementById('preview-text');
        const imagePreview = document.getElementById('image-preview');
        const pdfPreview = document.getElementById('pdf-preview');

        if (file) {
            $('.show-file').removeClass('d-none');
            $('.show-file').addClass('d-flex');
            const fileType = file.type;
            const reader = new FileReader();

            reader.onload = function (e) {
                if (fileType.startsWith('image/')) {
                    previewText.style.display = 'none';
                    pdfPreview.style.display = 'none';
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                } else if (fileType === 'application/pdf') {
                    previewText.style.display = 'none';
                    imagePreview.style.display = 'none';
                    pdfPreview.style.display = 'block';
                    pdfPreview.src = e.target.result;
                } else {
                    previewText.textContent = 'Formato não suportado';
                    previewText.style.display = 'block';
                    imagePreview.style.display = 'none';
                    pdfPreview.style.display = 'none';
                }
            }

            reader.readAsDataURL(file);
        }
    });

    document.getElementById('validatedInputGroupCustomFileProcuracao').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const previewTextProcuracao = document.getElementById('preview-text-procuracao');
        const imagePreviewProcuracao = document.getElementById('image-preview-procuracao');
        const pdfPreviewProcuracao = document.getElementById('pdf-preview-procuracao');

        if (file) {
            const fileType = file.type;
            const reader = new FileReader();
            $('.show_procuracao-file').removeClass('d-none');
            $('.show_procuracao-file').addClass('d-flex');
            reader.onload = function (e) {
                if (fileType.startsWith('image/')) {
                    previewTextProcuracao.style.display = 'none';
                    pdfPreviewProcuracao.style.display = 'none';
                    imagePreviewProcuracao.style.display = 'block';
                    imagePreviewProcuracao.src = e.target.result;
                } else if (fileType === 'application/pdf') {
                    previewTextProcuracao.style.display = 'none';
                    imagePreviewProcuracao.style.display = 'none';
                    pdfPreviewProcuracao.style.display = 'block';
                    pdfPreviewProcuracao.src = e.target.result;
                } else {
                    previewTextProcuracao.textContent = 'Formato não suportado';
                    previewTextProcuracao.style.display = 'block';
                    imagePreviewProcuracao.style.display = 'none';
                    pdfPreviewProcuracao.style.display = 'none';
                }
            }

            reader.readAsDataURL(file);
        }
    });

    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault();
        let isValid = true;

        // Função para mostrar mensagem de erro
        function showError(input, message) {
            const formControl = input.parentElement;
            const small = formControl.querySelector('small');
            small.innerText = message;
            small.classList.remove('d-none');
            small.classList.add('d-flex');
            small.classList.add('text-danger');
            isValid = false;
        }

        // Função para mostrar sucesso
        function showSuccess(input) {
            const formControl = input.parentElement;
            const small = formControl.querySelector('small');
            small.classList.add('d-none');
            small.classList.remove('d-flex');
        }

        // Função para checar se o campo está preenchido
        function checkRequired(inputArr) {
            inputArr.forEach(function (input) {
                if (input.value.trim() === '') {
                    showError(input, `${input.previousElementSibling.innerText} é obrigatório`);
                } else {
                    showSuccess(input);
                }
            });
        }

        // Função para checar o comprimento do campo
        function checkLength(input, min, max) {
            if (input.value.length < min) {
                showError(input, `${input.previousElementSibling.innerText} deve ter pelo menos ${min} caracteres`);
                isValid = false;
            } else if (input.value.length > max) {
                showError(input, `${input.previousElementSibling.innerText} não pode exceder ${max} caracteres`);
                isValid = false;
            } else {
                showSuccess(input);
            }
        }

        // Função para checar e-mail
        function checkEmail(input) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\.,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,})$/i;
            if (re.test(input.value.trim())) {
                showSuccess(input);
            } else {
                showError(input, 'Email não é válido');
                isValid = false;
            }
        }

        // Função para checar se os e-mails são iguais
        function checkEmailsMatch(input1, input2) {
            if (input1.value !== input2.value) {
                showError(input2, 'Emails não coincidem');
                isValid = false;
            } else {
                showSuccess(input2);
            }
        }

        function validateCPF(cpf) {
            // Remove non-digit characters
            cpf = cpf.replace(/[^\d]+/g, '');

            // Check for length
            if (cpf.length !== 11) return false;

            // Check for invalid sequences
            if (/^(\d)\1{10}$/.test(cpf)) return false;

            // Calculate the first check digit
            let sum = 0;
            for (let i = 0; i < 9; i++) {
                sum += parseInt(cpf.charAt(i)) * (10 - i);
            }
            let firstCheckDigit = 11 - (sum % 11);
            if (firstCheckDigit >= 10) firstCheckDigit = 0;

            // Verify the first check digit
            if (firstCheckDigit !== parseInt(cpf.charAt(9))) return false;

            // Calculate the second check digit
            sum = 0;
            for (let i = 0; i < 10; i++) {
                sum += parseInt(cpf.charAt(i)) * (11 - i);
            }
            let secondCheckDigit = 11 - (sum % 11);
            if (secondCheckDigit >= 10) secondCheckDigit = 0;

            // Verify the second check digit
            if (secondCheckDigit !== parseInt(cpf.charAt(10))) return false;

            return true;
        }

        // Selecionando os campos do formulário
        const nomeCompleto = document.getElementById('nome-completo');
        const naturalidade = document.getElementById('naturalidade');
        const nomePai = document.getElementById('nome-pai');
        const nomeMae = document.getElementById('nome-mae');
        const nascimento = document.getElementById('nascimento');
        const cpf = document.getElementById('cpf');
        const rg = document.getElementById('rg');
        const tipoSanguineo = document.getElementById('tipo-sanguineo');
        const telefone = document.getElementById('telefone');
        const endereco = document.getElementById('endereco');
        const bairro = document.getElementById('bairro');
        const numero = document.getElementById('numero');
        const cep = document.getElementById('cep');
        const responsavelLegal = document.getElementById('responsavel-legal');
        const nomeResponsavel = document.getElementById('nome-responsavel');
        const cpfResponsavel = document.getElementById('cpf-responsavel');
        const orgaoExpResponsavel = document.getElementById('orgao-exp-responsavel');
        const enderecoResponsavel = document.getElementById('endereco-responsavel');
        const bairroResponsavel = document.getElementById('bairro-responsavel');
        const telefoneResponsavel = document.getElementById('telefone-responsavel');
        const cidadeResponsavel = document.getElementById('cidade-responsavel');
        const estadoResponsavel = document.getElementById('estado-responsavel');
        const email = document.getElementById('email');
        const repetirEmail = document.getElementById('repetir-email');

        // Validando campos
        checkRequired([nomeCompleto, naturalidade, nomePai, nomeMae, nascimento, cpf, rg, tipoSanguineo, telefone, endereco, bairro, numero, cep, responsavelLegal, nomeResponsavel, cpfResponsavel, orgaoExpResponsavel, enderecoResponsavel, bairroResponsavel, telefoneResponsavel, cidadeResponsavel, estadoResponsavel, email, repetirEmail]);
        checkLength(nomeCompleto, 3, 50);
        checkLength(nomePai, 3, 50);
        checkLength(nomeMae, 3, 50);
        checkLength(cpf, 11, 14);
        checkLength(rg, 5, 15);
        checkEmail(email);

        checkEmailsMatch(email, repetirEmail);

        event.preventDefault();


        const myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        const urlencoded = new URLSearchParams();
        urlencoded.append("nome_completo", nomeCompleto.value);
        urlencoded.append("naturalidade", naturalidade.value);
        urlencoded.append("nome_pai", nomePai.value);
        urlencoded.append("nome_mae", nomeMae.value);
        urlencoded.append("nascimento", nascimento.value);
        urlencoded.append("cpf", cpf.value);
        urlencoded.append("rg", rg.value);
        urlencoded.append("tipo_sanguineo", tipoSanguineo.value);
        urlencoded.append("telefone", telefone.value);
        urlencoded.append("endereco", endereco.value);
        urlencoded.append("bairro", bairro.value);
        urlencoded.append("numero", numero.value);
        urlencoded.append("cep", cep.value);
        urlencoded.append("responsavel_legal", responsavelLegal.value);
        urlencoded.append("nome_responsavel", nomeResponsavel.value);
        urlencoded.append("cpf_responsavel", cpfResponsavel.value);
        urlencoded.append("orgao_exp_responsavel", orgaoExpResponsavel.value);
        urlencoded.append("endereco_responsavel", enderecoResponsavel.value);
        urlencoded.append("bairro_responsavel", bairroResponsavel.value);
        urlencoded.append("telefone_responsavel", telefoneResponsavel.value);
        urlencoded.append("cidade_responsavel", cidadeResponsavel.value);
        urlencoded.append("estado_responsavel", estadoResponsavel.value);
        urlencoded.append("email", email.value);
        urlencoded.append("repetirEmail", repetirEmail.value);

        const requestOptions = {
            method: "POST",
            headers: myHeaders,
            body: urlencoded,
            redirect: "follow"
        };

        fetch("/store", requestOptions)
            .then((response) => response.text())
            .then((result) => console.log(result))
            .catch((error) => console.error(error));
    });
</script>
</body>
</html>
