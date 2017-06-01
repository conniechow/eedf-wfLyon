<?php $this->layout('layout-admin',['title'=>'addMember']); ?>
<?php $this->start('main_content') ?>
<h2>Page addMember</h2>
<html>
    <head><title>Ma page ajouter Adhérent</title></head>
    <body>
        <h1>Ajouter un Adhérent</h1>
        <div class="row">
            <form name= "addMember" method="post" action="<?= $this->url('member_addMember')?>"  class="form-inline">
                        <label for="section" class="mr-sm-2">Id Section :</label>
                        <input type="text" id="id_section" name="id_section" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                        <label for="user" class="mr-sm-2">Id User :</label>
                        <input type="text" id="id_user" name="id_user" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                        <label for="nom" class="mr-sm-2">Nom</label>
                        <input type="text" id="name" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                        <label for="firstname" class="mr-sm-2">Prénom</label>
                        <input type="text" id="firstname" name="firstname" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                        <label for="totem" class="mr-sm-2">Totem</label>
                        <input type="text" id="totem" name="totem" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                        <label for="info" class="mr-sm-2">Info</label>
                        <input type="text" id="infosup" name="infosup" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                        <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                        <input type="submit" value="Ajouter un adhérent"/>
                </form>
        </div>
    </body>
</html>

<?php $this->stop('main_content') ?>