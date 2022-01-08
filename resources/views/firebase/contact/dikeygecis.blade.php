<html lang="en">
<style>
    body {
    margin: 0;
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #eee
}


    </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="indir" style="background-color: rgb(66, 194, 134)"> Pdf indir</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="pdfindirme">
                    <p style="text-align: center; font-size:30px">Kocaeli Üniveristesi</p>
                    <br>
                    <br>
                    <br>
                    <br>
                   <p>Üniversitenizin  <input type="text" style="border: none" ></p>
                   <p>Fakültesi <input type="text" style="border: none">  Bölümüne Dikey Geçiş</p>
                   <p>başvurusu yapmak istiyorum. Aşağıda doldurduğum bilgilerin doğruluğunu taahhüt ederim. Başvuru için gerekli</p>
                    <p>belgeleri ekte sunuyorum. Gereğini saygılarımla arz ederim.</p>                    

                   <p> Adres: <input type="text" style="border: none"> </p>                                 
                   <p>Adı Soyadı:  <input type="text" style="border: none"> </p>
                   <p>Öğrenci TC:  <input type="text" style="border: none"> </p>
                   <p>Öğrenci Yarıyılı:  <input type="text" style="border: none"> </p>                 
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <p>İmza:   </p>
                </div>
            </div>
        </div>
    </div>
    <!-- https://www.youtube.com/watch?v=DcN-AL6lXaY&t=153s kaynak olarak kullanılmıştır -->
    <script>
        window.onload = function () {
    document.getElementById("indir")
        .addEventListener("click", () => {
            const pdfindirme = this.document.getElementById("pdfindirme");
            console.log(pdfindirme);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'Dikey Geçiş Başvurusu.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(pdfindirme).set(opt).save();
        })
}
    </script>
</body>

</html>