<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/loja_eletronicos/app/css/categoria.css">

        <title>Create</title>

    </head>
    <body>

        <header class="header">

            <div class="titulo">
                <h1>Nova Categoria</h1>
            </div>

        </header>

        <main>

            <section class="form">
                
                <form class="create-form" method="POST" action="?action=categoria_store">

                    <input 
                        type="text" 
                        name="nome" 
                        placeholder="Nome da categoria"
                    >

                    <button class="btn-primary" type="submit">
                        Salvar
                    </button>

                </form>

            </section>

        </main>

        <footer>

        </footer>

    </body>
</html>