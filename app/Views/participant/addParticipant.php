<?php $this->layout('layout-admin',['title'=>'addParticipant']); ?>
<?php $this->start('main_content') ?>
<h2>Page AddParticipant</h2>


<html>
    <head><title>Ma page addParticipant</title></head>
    <body>
        <h1>Ajouter un participant</h1>
        <form name="addParticipant" method="post" action="<?= $this->url('participant_addParticipant')?>">
            Entrez votre id_section : <input type="text" name="id_section"/> <br/>
            Entrez votre id_user : <input type="text" name="id_user"/> <br/>
            Entrez votre nom : <input type="text" name="name"/> <br/>
            Entrez votre prénom : <input type="text" name="firstname"/><br/>
            Entrez votre pseudo : <input type="text" name="pseudo"/><br/>
            Entrez votre info suplémentaire : <input type="text" name="infosup"/><br/>
            <input type="submit" value="OK"/>
        </form>
    </body>
</html>

<?php $this->stop('main_content') ?>