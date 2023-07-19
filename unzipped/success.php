<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Thanks!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/thanks/css/thanks.css">
  <style>
  	.page {
    position: absolute;
    height: 100%;
    width: 100%;
    background: #3c3c3c;
}

.modal_section {
    position: absolute;
    display: flex;
    justify-content: center;
    left: 50%;
    top: 50%;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    -o-flex-direction: column;
    flex-direction: column;
    transform: translate(-50%, -50%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.up_section {
    display: flex;
    align-items: center;
    height: 50%;
    padding: 25px;
    justify-content: center;
    background: #444452;
}

.down_section {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    height: 50%;
    padding: 25px;
    background: #fff;
}

.img_like {
    width: 250px;
}

.img_star {
    width: 40px;
}

.section_text {
    font-size: 20px;
    text-align: center;
}

.green_text {
    color: #444452;
    font-weight: 700;
}

/*Media screen*/
@media only screen and (max-width: 768px) {
    .modal_section {
        width: 95%;
        height: 95%;
    }
}

@media (min-width: 1500px) and (min-height: 1050px) {
    .up_section {
        padding: 50px;
    }

    .down_section {
        padding: 50px;
    }

    .section_text {
        font-size: 2rem;
    }

    .section_title {
        font-size: 3.5rem;
    }
}

@media (max-width: 1250px) {
    .section_title {
        font-size: 36px;
    }

    .section_text {
        font-size: 20px;
    }

    .img_like {
        width: 170px;
    }

    .up_section {
        height: 35%;
    }
}

@media (max-width: 991px) {
    .section_title {
        font-size: 30px;
    }

    .section_text {
        font-size: 17px;
    }

    .img_like {
        width: 130px;
    }

    .up_section {
        height: 35%;
    }
}

@media (max-width: 767px) {
    .section_title {
        font-size: 42px;
    }

    .section_text {
        font-size: 23px;
    }

    .img_like {
        width: 135px;
    }

    .up_section {
        height: 35%;
    }

    .down_section {
        height: 100%;
    }
}

@media (max-width: 640px) {
    .section_title {
        font-size: 42px;
    }

    .section_text {
        font-size: 19px;
    }

    .img_like {
        width: 135px;
    }

    .up_section {
        height: 35%;
    }

    .down_section {
        height: 100%;
    }
}

.block_alert {
    padding: 10px 15px;
    margin-top: 1.5rem;
    border: 2px solid #b61616;
    border-radius: 0px 10px 10px 10px;
    position: relative;
}

.block_alert p {
    margin: 0;
}

.block_alert:before {
    content: 'Внимание:';
    background: #b61616;
    display: inline-block;
    position: absolute;
    color: #fff;
    left: -2px;
    top: -29px;
    padding: 4px 29px 4px 15px;
    border-radius: 10px 30px 0 0;
    font-weight: bold;
}


@media (max-width: 480px) {
    .section_title {
        font-size: 33px;
    }

    .section_text {
        font-size: 14px;
    }

    .img_like {
        width: 135px;
    }

    .up_section {
        height: 35%;
        padding: 10px;
    }

    .down_section {
        height: 100%;
        padding: 5px;
    }

    .block_alert {
        padding: 5px;
        border-radius: 10px 10px 10px 10px;
    }

    p {
        margin-bottom: 0.5rem;
    }

    .block_alert:before {
        left: calc(50% - 2px);
        top: -33px;
        transform: translate(-50%, 0);
        padding: 4px 29px 4px 29px;
        border-radius: 30px 30px 0 0;
    }
}
  </style>
  <!--[HEADER]--></head>
<body>

    <div class="page">
        <div class="modal_section">
            <div class="up_section">
                <img width="225" height="225" alt="" src="data:image/png;base64,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">
            </div>
            <div class="down_section">
                <h1 class="section_title green_text">Спасибо!</h1>
                <p class="section_text">Вы записаны на консультацию с менеджером платформы сегодня с 09:00 до 21:00.</p>
                <p class="section_text">
                    Официальный представитель будет звонить с неизвестного для Вас номера телефона. 
                    Вам нужно будет <span class="green_text">ОБЯЗАТЕЛЬНО</span> взять трубку, чтобы получить ответы на все Ваши вопросы
                </p>
            </div>
        </div>
    </div>
    <!--[FOOTER]--></body>
</html>