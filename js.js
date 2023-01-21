    // DELETA DADO PRESENTE NO CRUD
    function delete_record(id) {
        if (confirm("Tem certeza de que deseja excluir este registro?")) {
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {

                    if (data == 1) {
                        document.getElementById(id).remove()

                    } else {
                        alert("Erro em apagar o dado");
                    }

                },

            });
        }
    }

    //////////////////////////////////////////////////////////

    // DELETA DADO PRESENTE NO CRUD
    function tarefas(id, name) {
        $.ajax({
            url: "tarefas.php",
            type: "POST",
            data: {
                id: id,
            },
            success: function(data) {
                $('#rap').html(data);
                $('#ModalTarefas').modal('show');


            },

        });

    }

    //////////////////////////////////////////////////////////


    // Exibir o modal quando o botão de edição é clicado
    function edit_record(id) {
        // Obter o ID do dado a ser editado
        // Fazer uma chamada AJAX para obter os dados atuais
        $.ajax({
            url: 'read.php',
            type: "POST",
            data: {
                id: id
            },
            success: function(data) {
                dados = data.split(',');
                // Preencher os campos de input com os dados atuais
                $('#editID').val(dados[0]);
                $('#editNome').val(dados[1]);
                // Preencha os demais campos de input com os valores correspondentes
                $('#editEmail').val(dados[2]);
                $('#editTelefone').val(dados[3]);
                $('#editWebsite').val(dados[4]);
                $('#editRua').val(dados[5]);
                $('#editNumero').val(dados[6]);
                $('#editCidade').val(dados[7]);
                $('#editCEP').val(dados[8]);
                $('#editNomeEmpresa').val(dados[9]);
                // Sanitize os dados antes de preencher os campos
                $('#editID').val(htmlEntities(dados[0]));
                $('#editNome').val(htmlEntities(dados[1]));
                $('#editEmail').val(htmlEntities(dados[2]));
                $('#editTelefone').val(htmlEntities(dados[3]));
                $('#editWebsite').val(htmlEntities(dados[4]));
                $('#editRua').val(htmlEntities(dados[5]));
                $('#editNumero').val(htmlEntities(dados[6]));
                $('#editCidade').val(htmlEntities(dados[7]));
                $('#editCEP').val(htmlEntities(dados[8]));
                $('#editNomeEmpresa').val(htmlEntities(dados[9]));
                // Exibir o modal
                $('#editModal').modal('show');
            }
        });
    };

    function htmlEntities(str) {
        return String(str).replace(/&/g, '&').replace(/</g, '<').replace(/>/g, '>').replace(/"/g, '"');
    }

    // Enviar as alterações para o servidor quando o botão de salvar é clicado
    $('#saveChanges').on('click', function() {
        // Obter o ID do dado a ser editado
        var id = $('.editBtn').data('id');
        // Criar um objeto com as alterações
        var updatedData = {
            id: $('#editID').val(),
            nome: $('#editNome').val(),
            email: $('#editEmail').val(),
            telefone: $('#editTelefone').val(),
            website: $('#editWebsite').val(),
            rua: $('#editRua').val(),
            numero: $('#editNumero').val(),
            cidade: $('#editCidade').val(),
            cep: $('#editCEP').val(),
            nomeEmpresa: $('#editNomeEmpresa').val()
        };
        // Fazer uma chamada AJAX para enviar as alterações para o servidor
        $.ajax({
            url: 'update.php',
            method: 'POST',
            data: updatedData,
            success: function(data) {
                // Fechar o modal e atualiza tabela com os dados atualizados
                console.log(data);
                if (data == 1) {
                    $('#editModal').modal('hide');
                    location.reload();

                } else {
                    $('#editModal').modal('hide');
                    alert("Erro ao editar usuario, consulte um administrador");
                }
            }
        });
    });

    // Enviar as alterações para o servidor quando o botão de salvar é clicado
    $('#saveCadastro').on('click', function() {
        // Criar um objeto com as alterações
        var cadastroData = {
            nome: $('#nnome').val(),
            email: $('#eemail').val(),
            telefone: $('#ttelefone').val(),
            website: $('#wwebsite').val(),
            rua: $('#rrua').val(),
            numero: $('#nnumero').val(),
            cidade: $('#ccidade').val(),
            cep: $('#ccep').val(),
            nomeEmpresa: $('#eempresa').val()
        };
        // Fazer uma chamada AJAX para enviar as alterações para o servidor
        $.ajax({
            url: 'cadastro.php',
            method: 'POST',
            data: cadastroData,
            success: function(data) {
                // Fechar o modal e atualiza tabela com os dados atualizados
                console.log(data);
                if (data == 1) {
                    $('#ModalCadastro').modal('hide');
                    location.reload();

                } else {
                    $('#ModalCadastro').modal('hide');
                    alert("Erro ao cadastrar usuario, consulte um administrador");
                }
            }
        });
    });