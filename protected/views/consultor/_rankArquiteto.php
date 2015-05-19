<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$dataProvider = new CActiveDataProvider('Arquiteto');
?>
  <div class="block">
            <div class="head orange">                                
                <h2>Rank de Arquitetos</h2>
                <ul class="buttons">
                  
                </ul>
            </div>
            <div class="data-fluid">
              <table cellpadding="0" cellspacing="0" width="100%" class="table fpTable lcnp">
                    <thead>
                        <tr>
                            <th width="30%">Name</th>
                            <th width="30%">CPF</th>
                             <th width="30%">E-mail</th>
                            <th width="10%">Pontos</th>
                        </tr>
                    </thead>
                    <tbody>


<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_viewRank',
));
?>
                    </tbody>
                </table>
            </div>                            
        </div>     