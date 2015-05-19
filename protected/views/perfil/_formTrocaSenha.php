<?php
$id_user = Yii::app()->user->getId();
 $user = User::model()->find($condition="id=$id_user");
?>
 <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'senha-form',
        'action' => Yii::app()->createUrl('/perfil/senha'),
        'enableAjaxValidation' => false,
    ));
    ?>
<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<input id='senhaatual' type="password" name='senhaatual' class="form-control" placeholder="Senha Atual"/>
						   <span class="bottom">Senha atual não confere</span></div> 
					
</div>
				
                                   <div class="form-group">
                              <div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
                                    <input type="password" name='passwordNova' id='passwordNova' class="form-control" placeholder="Nova Senha"/>
                                     <span class="bottom">Repita a mesma senha</span></div>
                                   </div>
					<div class="form-group">
                                  <div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div><input type="password" name='repeti' id='repeti' class="form-control" placeholder="Repetir Senha" />
                                     <span class="bottom">Repita a mesma senha</span></div>
                                        </div>
                                <div class="form-group">
					  <button id='salvasenha' type='button' class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Salvar
					</button>
				</div>
                                      
                   
               
                               <input id='id' name='id' value='<?php echo $user->id ?>' class ='hidden' />
                       
                   
<?php $this->endWidget(); ?>
 <script type='text/javascript' src='js/validationSenha.js'></script>
<script>
   
    $(function(){
        $(".bottom").hide();
       $("#salvasenha").click(function(){
           debugger;
           var validation = Conferesenha('<?php echo $user->password ?>');
               validation = Conferenovasenha();       
    if(validation)
               {
                   $("#senha-form").submit();
               }
       
       });
      
        
    });
 
    </script>