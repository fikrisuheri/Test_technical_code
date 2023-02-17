<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Pranala</title>
</head>
<body>
    <form>
        <input type="number" name="angka" id="angka" placeholder="Input Angka"> <br> <br>
        <small id="message"></small> <br>
        <button type="button" onclick="generateSegitiga()">Generate Segitiga</button>
        <button type="button" onclick="generateGanjil()">Generate Bilangan Ganjil</button>
        <button type="button" onclick="generatePrima()">Generate Bilangan Prima</button>
    </form>
    <br>
    
    <div id="hasil">

    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
         function generateSegitiga()
        {
            var angka = $('#angka').val();
            if(angka == null || angka == ''){
                $('#message').text('Harap Isi Form Angka');
            }else{
                $.ajax({
                type : "GET",
                url :"segitiga.php",
                 dataType:'JSON',
                data : {
                    angka:angka
                },
                success : function(res){
                    $('#hasil').empty();
                    $('#message').empty();                    
                    if(res.status == 'sukses'){
                        $('#hasil').html(res.data);
                    }else{
                        $('#message').html(res.message);
                    }
                    
                }
            })
            }
           
        }

         function generateGanjil()
        {
            var angka = $('#angka').val();
            if(angka == null || angka == ''){
                $('#message').text('Harap Isi Form Angka');
            }else{
                $.ajax({
                type : "GET",
                url :"ganjil.php",
                dataType:'JSON',
                data : {
                    angka:angka
                },
                success : function(res){
                    $('#hasil').empty();
                    $('#message').empty();                    
                    if(res.status == 'sukses'){
                        $('#hasil').html(res.data);
                    }else{
                        $('#message').html(res.message);
                    }
                }
            })
            }
            
        }

        function generatePrima()
        {
            var angka = $('#angka').val();
            if(angka == null || angka == ''){
                $('#message').text('Harap Isi Form Angka');
            }else{
                $.ajax({
                type : "GET",
                url :"prima.php",
                dataType:'JSON',
                data : {
                    angka:angka
                },
                success : function(res){
                    $('#hasil').empty();
                    $('#message').empty();                    
                    if(res.status == 'sukses'){
                        $('#hasil').html(res.data);
                    }else{
                        $('#message').html(res.message);
                    }
                }
            })
            }
            
        }
    </script>
</body>
</html>