<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body>
    <h1 class= "text-center my-4">Criar conta</h1>

    <div class="card shadow my-5 w-75 mx-auto">
        <div class="card-body">
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input
                             type="text"
                             name="name"
                             class="form-control"
                             placeholder="Nome"
                             >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="E-mail"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                            type="text"
                            name="cpf"
                            class="form-control"
                            placeholder="CPF"
                            >
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input
                             type="password"
                             name="password"
                             class="form-control"
                             placeholder="Senha"
                             >
                        </div>
                    </div>
                </div>


                <hr>

                <div class="row mt-4">
                    <div class="col-md-3">
                   <div class="form-group">
                           <input
                            type="text"
                            name="cep"
                            class="form-control"
                            placeholder="CEP"
                            >
                        </div>
                    </div>
                    <div class="col-md-2">
                   <div class="form-group">
                           <input
                            type="text"
                            name="uf"
                            class="form-control"
                            placeholder="UF"
                            >
                        </div>
                    </div>

                    <div class="col-md-7">
                   <div class="form-group">
                           <input
                            type="text"
                            name="city"
                            class="form-control"
                            placeholder="Cidade"
                            >
                        </div>
                    </div>

                    <div class="col-md-9">
                   <div class="form-group">
                           <input
                            type="text"
                            name="street"
                            class="form-control"
                            placeholder="Logradouro"
                            >
                        </div>
                    </div>

                    <div class="col-md-3">
                   <div class="form-group">
                           <input
                            type="text"
                            name="number"
                            class="form-control"
                            placeholder="Número"
                            >
                        </div>
                    </div>

                    <div class="col-md-6">
                   <div class="form-group">
                           <input
                            type="text"
                            name="district"
                            class="form-control"
                            placeholder="Bairro"
                            >
                        </div>
                    </div>

                    <div class="col-md-6">
                   <div class="form-group">
                           <input
                            type="text"
                            name="complement"
                            class="form-control"
                            placeholder="Complemento"
                            >
                        </div>
                    </div>
                    </div>

                    <hr>

            <button type="submit" class="btn btn-success btn-block mt-3">
                Criar conta
                </button>
            </form>
        </div>
    </div>
</body>
</html>
