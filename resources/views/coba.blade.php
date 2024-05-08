<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg">
        <div class="row">
            <div class="d-flex col-lg-3 flex-lg-column justify-center align-items-center m-3 mx-auto  rounded p-3">
                <div class="image bg-info rounded" style="height:100px; width:100px; border:1px solid black"></div>
                <div class="d-flex flex-column justify-content-between align-center text-center w-100 pb-4">
                    <div class="d-flex flex-column align-items-start align-items-md-end align-items-lg-center">
                        <div class="fs-3 fw">Name</div>
                        <div class="fs-6 fw">NPM</div>
                    </div>
                    <div class=" d-flex flex-row justify-content-between text-center" id="ipk1">
                        <div>
                            <div>3.80</div>
                            <div>IPK</div>
                        </div>
                        <div>
                            <div>4</div>
                            <div>Rank</div>
                        </div>
                        <div>
                            <div>6</div>
                            <div>Semester</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex col-lg-3 flex-lg-column justify-center align-items-center m-3 mx-auto  rounded p-3">
                <div class="image bg-info rounded" style="height:100px; width:100px; border:1px solid black"></div>
                <div class="d-flex flex-column justify-center align-center text-center w-100 pb-4">
                    <div class="d-flex flex-column align-items-start align-items-md-end align-items-lg-center">
                        <div class="fs-3 fw">Name</div>
                        <div class="fs-6 fw">NPM</div>
                    </div>
                    <div class=" d-flex flex-row justify-content-between text-center" id="ipk2">
                        <div>
                            <div>3.70</div>
                            <div>IPK</div>
                        </div>
                        <div>
                            <div>4</div>
                            <div>Rank</div>
                        </div>
                        <div>
                            <div>6</div>
                            <div>Semester</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex col-lg-3 flex-lg-column justify-center align-items-center m-3 mx-auto rounded p-3">
                <div class="image bg-info rounded" style="height:100px; width:100px; border:1px solid black"></div>
                <div class="d-flex flex-column justify-center align-center text-center w-100 pb-4">
                    <div class="d-flex flex-column align-items-start align-items-md-end align-items-lg-center">
                        <div class="fs-3 fw">Name</div>
                        <div class="fs-6 fw">NPM</div>
                    </div>
                    <div class=" d-flex flex-row justify-content-between text-center" id="ipk3">
                        <div>
                            <div>3.90</div>
                            <div>IPK</div>
                        </div>
                        <div>
                            <div>4</div>
                            <div>Rank</div>
                        </div>
                        <div>
                            <div>6</div>
                            <div>Semester</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Mendapatkan elemen IPK
        var ipk1 = document.getElementById("ipk1");
        var ipk2 = document.getElementById("ipk2");
        var ipk3 = document.getElementById("ipk3");

        // Mendapatkan nilai IPK
        var ipkValue1 = parseFloat(ipk1.firstElementChild.textContent);
        var ipkValue2 = parseFloat(ipk2.firstElementChild.textContent);
        var ipkValue3 = parseFloat(ipk3.firstElementChild.textContent);

        // Memeriksa nilai IPK dan mengubah warna latar belakang sesuai
        if (ipkValue1 >= ipkValue2 && ipkValue1 >= ipkValue3) {
            ipk1.style.backgroundColor = "orange";
        } else if (ipkValue2 >= ipkValue1 && ipkValue2 >= ipkValue3) {
            ipk2.style.backgroundColor = "orange";
        } else {
            ipk3.style.backgroundColor = "orange";
        }
    </script>

</body>

</html>
