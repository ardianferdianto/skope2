

<?php echo $form->create('Lesson',array('enctype'=>'multipart/form-data','style'=>'width: 100%;position: relative;float: left;text-align: left;'));?>

    <div style="float:left;width:65%;margin-top:10px;">
        <div class="input text textareablock">
            
            <?php
                echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Lesson','div'=>false,'style'=>'width:50%;'));
            ?>
        </div>

        <div class="input text textareablock">

            <?php
                echo $form->input('author',array('class'=>'text-input large-input','label'=>'Nama Guru','div'=>false,'style'=>'width:50%;'));
            ?>

        </div>

        <div class="input text textareablock">
            <label>Pilih Kelas</label>
            <?php
                
                echo $form->select('kelas',$arrayKelas,null,array('class'=>'text-input large-input','label'=>'Kelas','div'=>false,'style'=>'width:30%;'));
            ?>

        </div>

        <div class="input text textareablock">
            <label>Pilih Mata Pelajaran</label>
            <?php
                
                echo $form->select('pelajaran_id',$listPelajaran2,null,array('class'=>'text-input large-input','label'=>'Pelajaran','div'=>false,'style'=>'width:50%;'));
            ?>

        </div>

        <div class="input text textareablock" style="display:block;margin:10px 0;float: left;">
            <label>Pilih Warna Cover</label>
            <div class="colorlist" style="float:left;width: 300px;">

                <div class="colorlistselect <?php if ($lesson['Lesson']['color'] == 'orange') { echo 'active';}?>" data-color="orange" style="display:inline-block;width:30px;height:30px;background-color:#ff924a;">&nbsp;</div>

                <div class="colorlistselect <?php if ($lesson['Lesson']['color'] == 'blue') { echo 'active';}?>" data-color="blue" style="display:inline-block;width:30px;height:30px;background-color:#3fb5db;">&nbsp;</div>

                <div class="colorlistselect <?php if ($lesson['Lesson']['color'] == 'green') { echo 'active';}?>" data-color="green" style="display:inline-block;width:30px;height:30px;background-color:#a4c19e;">&nbsp;</div>
            </div>

        </div>

        <?php
            echo $form->input('color',array('type'=>'hidden','id'=>'colortosave'));
        ?>

        <div class="input textarea textareablock">
            <?php
                echo $form->input('description',array('class'=>'text-input large-input','type'=>'textarea','label'=>'Deskripsi Singkat','div'=>false));
            ?>
        </div>

    </div>
    <div style="float:left;width:32%;margin-left:15px;">
        <br/>
        <button id="submit_step1" class="btn btn-4 btn-4c icon-arrow-right">Lanjutkan</button>
    </div>
    <?php echo $form->end();?>
</form>
