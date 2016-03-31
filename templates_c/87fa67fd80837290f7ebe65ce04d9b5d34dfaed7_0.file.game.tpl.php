<?php /* Smarty version 3.1.24, created on 2015-07-04 11:40:24
         compiled from "./templates/game.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30296908955979bf8120e07_52585885%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fa67fd80837290f7ebe65ce04d9b5d34dfaed7' => 
    array (
      0 => './templates/game.tpl',
      1 => 1435999222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30296908955979bf8120e07_52585885',
  'variables' => 
  array (
    'game' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55979bf82a99d5_52212398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55979bf82a99d5_52212398')) {
function content_55979bf82a99d5_52212398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30296908955979bf8120e07_52585885';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row">
	<div class="col-md-6">
		<form id="game-form-edit" data-toggle="validator" role="form">


		<!-- Названия -->
			<div class="form-group">
				<label for="js-game-title"><img src="/images/eng.gif">&nbsp;Английское название</label>
				<input type="text" name="title" maxlength="50" class="form-control" id="js-game-title" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['title'];?>
" required placeholder="" data-error="Введите английское название">
				<p class="help-block with-errors"></p>
			</div>
			<div class="form-group">
				<label for="js-game-title_ru"><img src="/images/rus.gif">&nbsp;Русское название</label>
				<input type="text" name="title_ru" maxlength="50" class="form-control" id="js-game-title_ru" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['title_ru'];?>
" required placeholder="">
			</div>

		<!-- Описания -->	
			<div class="form-group">
				<label for="js-game-description_small">Краткое описание</label>
				<span id="help-game-description_small" class="help-block with-errors">Краткое описание должно быть не менее 140 символов</span>
				<textarea class="form-control" id="js-game-description_small" data-minlength="140" minlength="140" rows="3" aria-describedby="help-game-description_small" data-error="Краткое описание должно быть не менее 140 символов" required><?php echo $_smarty_tpl->tpl_vars['game']->value['description_small'];?>
</textarea>			
			</div>

			<div class="form-group">
				<label for="js-game-description">Полное описание</label>
				<span id="help-game-description" class="help-block with-errors">Полное описание должно быть не менее 140 символов</span>
				<textarea class="form-control" id="js-game-description" data-minlength="140" minlength="140" rows="3" aria-describedby="help-game-description" data-error="Полное описание должно быть не менее 140 символов" required><?php echo $_smarty_tpl->tpl_vars['game']->value['description'];?>
</textarea>
				<p class="help-block"></p>
			</div>

		<!-- Нужен плеер -->
			<div class="checkbox">
				<label class="checkbox-inline">
					<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['game']->value['shockwave'] == 1) {?>checked<?php }?> name="shockwave" id="js-game-player1" value="1"> нужен shockwave плеер
				</label>				
				<label class="checkbox-inline">
					<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['game']->value['unity'] == 1) {?>checked<?php }?> name="unity" id="js-game-player2" value="1"> нужен unity плеер
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['game']->value['html5'] == 1) {?>checked<?php }?> name="html5" id="js-game-player3" value="1"> html 5 игра
				</label>
			</div>


			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group">
						<label for="js-game-controls">Управление</label>
						<span id="help-game-controls" class="help-block">Тут будет выбор управление</span>
						<textarea class="form-control" id="js-game-controls" maxlength="500" rows="3" aria-describedby="help-game-controls"><?php echo $_smarty_tpl->tpl_vars['game']->value['controls'];?>
</textarea>
					</div>
				</div>
			</div>


			<button type="submit" class="btn btn-default">Submit</button>
		</form>

	</div>
	<div class="col-md-6">.col-md-6</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>