<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>
    
<main>

<div class="mx-auto max-w-7xl py-6 text-center"  >
    <p><?=htmlspecialchars($note['body']) ?></p>

    <from class="mt-6" method="POST" id="delete_form">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="text-sm text-red-500">Delete</button>
    </from>
</div>
</main>


<script> 

// let delete_form=document.getElementById('delete_form');


// document.getElementById('delete_form').addEventListener('submit',function(e){
//     // e.preventDefault();
//     console.log("hello")
//  })

</script>  
<?php require base_path('views/partials/footer.php'); ?>

