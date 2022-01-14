<html class="hydrated" lang="en">

<head>
    <meta charset="UTF-8" />
    <style data-styles="">
        ion-icon {
            visibility: hidden;
        }

        .hydrated {
            visibility: inherit;
        }
    </style>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/twibbon/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/twibbon/css/style.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png" />
    <link rel="mask-icon" href="<?= base_url() ?>assets/twibbon/img/safari-pinned-tab.svg" color="#1baaa0" />
    <meta name="apple-mobile-web-app-title" content="Twibbonize" />
    <meta name="application-name" content="Twibbonize" />
    <meta name="msapplication-TileColor" content="#1baaa0" />
    <meta name="theme-color" content="#1baaa0" />
    <title>Twibbon | Where campaigns meet you!</title>

    <meta name="keywords" content="Twibbon, Campaign, Frame" />
    <meta data-vue-meta="1" property="og:site_name" content="Twibbonize" />
    <meta data-vue-meta="1" property="og:type" content="website" />
    <meta data-vue-meta="1" name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/twibbon/css/campaign.68e4ca24.css" />

    <!-- CANVAS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/canvas/layout.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/canvas/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="<?= base_url() ?>assets/canvas/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/canvas/fabric.min.js"></script>
    <script src="<?= base_url() ?>assets/canvas/FileSaver.js"></script>
    <script src="<?= base_url() ?>assets/canvas/canvas-toBlob.js"></script>
    <script src="<?= base_url() ?>assets/canvas/material.min.js"></script>

    <meta name="description" content="From movements tackling huge, serious causes — to anything just for fun, you can always take your part in anything with Twibbonize." />
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js" data-stencil-namespace="ionicons"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js" data-stencil-namespace="ionicons"></script>
</head>

<body>
    <div></div>
    <noscript><strong>Twibbon | Where campaigns meet you!</strong></noscript>
    <div id="app">
        <div class="hero_page bg-like-navbar">
            <div class="site-header has_link_dark">
                <!---->
            </div>
            <!---->
        </div>
        <div class="campaign__page">
            <div class="container d-flex flex-column align-items-center p-0" style="">

                <div id="twibbon" class="col-md-8 col-lg-6 mt-20 mb-20">
                    <div style="
                background-color: rgb(255, 255, 255);
                border-radius: 10px;
                padding: 15px;
              ">
                        <div class="twibbon__tooltip d-flex p-0" style="border-radius: 5px; margin-top: 15px">
                            <img src="https://www.twibbonize.com/assets/images/icons/tip-icon.svg" alt="Tip Icon" class="d-flex align-items-start m-0 p-0 h-100" style="opacity: 0.5" />
                            <div class="d-flex align-items-center">
                                <p class="my-1 ml-2 mr-2" style="font-size: 0.875rem">
                                    Use this photo filter and share it on your social media!
                                </p>
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="twibbon__container" style="height: 460px">
                            <!-- <div style="margin: 5px; position: relative" class="canvas-padding">
                                <canvas id="c"></canvas>
                            </div> -->
                            <div class="editor">
                                <div class="canvas-padding">
                                    <canvas id="c"></canvas>
                                </div>
                                <!-- <div class="tombol">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
                                        <input class="mdl-textfield__input" placeholder="Unggah foto mu!" type="text" id="uploadFile" readonly />
                                        <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
                                            <i class="material-icons">attach_file</i><input type="file" id="uploadBtn">
                                        </div>
                                    </div>
                                    <br>
                                    <button id="download" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">unduh</button>

                                </div> -->
                            </div>
                        </div>
                        <!---->
                        <div class="twibbon__button">
                            <input id="uploadPhoto" type="file" hidden="hidden" />
                            <div class="d-flex">
                                <input class="mdl-textfield__input" placeholder="Unggah foto mu!" type="text" id="uploadFile" readonly />
                                <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
                                    <i class="material-icons">attach_file</i><input type="file" id="uploadBtn">
                                </div>
                                <!-- <button class="twb-btn twb-btn--primary flex--1 my-1" id="uploadBtn">
                                    <ion-icon name="camera" style="font-size: 24px; margin-right: 4px" role="img" class="md hydrated" aria-label="camera"></ion-icon>
                                    Choose a Photo
                                </button>
                                <button class="twb-btn twb-btn--primary flex--1 my-1" id="download">
                                    <ion-icon name="camera" style="font-size: 24px; margin-right: 4px" role="img" class="md hydrated" aria-label="camera"></ion-icon>
                                    Download
                                </button> -->
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
        </div>
        <!---->
    </div>

    <script>
        document.getElementById("uploadBtn").onchange = function() {
            document.getElementById("uploadFile").value = this.files[0].name;
        };
        var canvas = new fabric.Canvas('c');
        canvas.setWidth(1000);
        canvas.setHeight(1000);

        var canvasWrapper = document.getElementById('c');
        var canvasWrapperWidth = canvasWrapper.clientWidth;
        $(function() {
            $(":file").change(function() {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        fabric.Image.fromURL('tesbeh.png', function(img) {
            img.scaleToWidth(canvas.getWidth());
            canvas.setOverlayImage(img, canvas.renderAll.bind(canvas));
        });

        function imageIsLoaded(e) {
            fabric.Image.fromURL(e.target.result, function(img) {
                var aspectRatio = 1350 / 1080;
                var factor = 1080 / img.width;
                img.set({
                    scaleX: factor,
                    scaleY: factor
                });
                canvas.add(img);
                canvas.item(0).set({
                    borderColor: 'gray',
                    cornerColor: 'black',
                    cornerSize: 70,
                    borderScaleFactor: 10,
                    hasBorders: true,

                    rotatingPointOffset: 200,
                    padding: 60,
                    transparentCorners: true
                });
                canvas.setActiveObject(canvas.item(0));
                this.__canvases.push(canvas);
                canvas.sendToBack(img);
            });
        };
        $("#download").click(function() {
            $("#c").get(0).toBlob(function(blob) {
                saveAs(blob, "myIMG.png");
            });
        });
    </script>
</body>

</html>