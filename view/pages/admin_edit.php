
<div class="span8">
	<h1>Editer une page</h1>


  <form action="<?php echo Router::url('admin/pages/edit/'.$id); ?>" method="post">
   <?php echo $this->Form->input('name','Titre'); ?>
   <?php echo $this->Form->input('slug','Url'); ?>
   <?php echo $this->Form->input('id','hidden'); ?>
   <?php echo $this->Form->input('content','Contenu',array('type'=>'textarea','rows'=>5)); ?>
   <?php echo $this->Form->input('online','En ligne',array('type'=>'checkbox')); ?>
   <div class="actions">
    <input type="submit" class="btn primary" value="Envoyer">
  </div>
</form>
</div>


<script type="text/javascript" src="<?php echo Router::webroot('js/tinymce/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar3: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>