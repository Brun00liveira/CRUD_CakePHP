<div class="container mt-4">
    <div class="form-control">
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Profissão</th>
                
            </tr>
        </thead>
        <tbody>
            <tr> 
                <th scope="row"><?php echo $post->id?></th>
                <td><?php echo $post->nome?></td>
                <td><?php echo $post->data_de_nascimento?></td>
                <td><?php echo $post->profisso->profissao?></td>
            </tr>    
        </table> 
                 
    </div>
    <?php echo $this->Html->link(__('Voltar'), ['action'=>'index'],['class' =>'btn btn-info color-dark mt-3'])?>
</div>