<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Agregar monto</h2>
                {!! Form::Open(['route'=> 'guardar', 'method'=>'post']) !!}
                {{ method_field('POST') }}

                    <div class="form-group">
                        <label for="">Pago M/USD</label>
                        <input type="text" class="form-control" name="usd">
                    </div>
                    <div class="form-group">
                        <label for="">Pago USD/Bs</label>
                        <input type="text" class="form-control" name="bs">
                    </div>                
                    <div class="form-group text-right">
                        <button class="btn btn-success">Guardar</button>
                    </div>
                {!! Form::close() !!}
            
                <hr>
            
                <h4 class="p-2">Lista</h4>
                <table class="table table-hover">
                    <tr class="text-center">
                        <th>USD</th>
                        <th>BS</th>
                    </tr>
                    @foreach($pagos as $pago)
                        <tr class="text-center">
                            <td>{{$pago->usd}}</td>
                            <td>{{$pago->bs}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>
</html>