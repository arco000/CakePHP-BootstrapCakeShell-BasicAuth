<!--?php debug( $schema); ?-->

<div class="tokens form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Token'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

							    <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Token.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Token.id'))); ?></li>
							    <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Tokens'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Token', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('userid', array('class' => 'form-control', 'placeholder' => 'Userid'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('type', array('class' => 'form-control', 'placeholder' => 'Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('role', array('class' => 'form-control', 'placeholder' => 'Role'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('token', array('class' => 'form-control', 'placeholder' => 'Token'));?>
				</div>
				<div class="form-group">
					<div class="submit">
						<?php echo $this->Form->submit(__('Submit'), array('name' => 'data[submit]', 'class' => 'btn btn-default', 'div' => false)); ?>
						<?php echo $this->Form->submit(__('Apply'), array('name' => 'data[apply]', 'class' => 'btn btn-default', 'div' => false, 'style' => 'margin-left:10px;')); ?>
					</div>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
