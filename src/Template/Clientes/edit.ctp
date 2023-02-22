
<fieldset>
    <div class="container col-8">
        <?= $this->Form->create($cliente) ?>
        <div class="form-group mt-4 ">
            <?php echo $this->Form->control('nome',['class' => 'form-control', 'Placeholder' => 'digite seu nome']); ?>
        </div>
          
        <div class="form-group">
            <label>Data de nascimento</label> 
            <input class="form-control" type="date" name="data_de_nascimento" id="data de nascimento" value="<?php echo $cliente->data_de_nascimento->i18nFormat('yyyy-MM-dd');?>">
        </div> 
        <div class="form-group">
            <select name="profissao_id" class="form-control">
            <option value="">Selecione uma profissão</option> 
                <?php foreach($profissoes as $proficao):?> 
                    <option <?php echo $cliente->profissao_id == $proficao->id ? 'selected' : '';?>  value="<?php echo $proficao->id;?>">"<?php echo $proficao->profissao;?>"</option>
                <?php endforeach;?>
            </select>
        </div>
        <?php echo $this->Form->button(__('Editar'), ['class' =>'btn btn-warning color-dark']);?>
        <?php echo $this->Html->link(__('Voltar'), ['action'=>'index'],['class' =>'btn btn-info color-dark'])?>
    </div>
</fieldset>
