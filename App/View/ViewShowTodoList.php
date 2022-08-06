<?php 

    $location = "../App/View/ViewAddTodoList.php";
    $file = '../App/Model/data.json';
    $anggota = file_get_contents($file);
    $todoList = json_decode($anggota, true);
    if(empty($todoList))
    {
        header('Location: ' . $location);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">        
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Show TodoList</title>
</head>
<body>
    
    <section class="pt-10 px-10 w-full h-screen ">
        <div class="container mx-auto">
            <div class="w-[400px] h-[500px] bg-slate-200 mx-auto rounded-lg border border-5 border-sky-400 relative">
                <h2 class="text-center text-4xl font-extrabold mt-5 text-teal-500">TODOLIST</h2>
                <?php foreach($todoList as $number => $todo) : ?>
                    <?php foreach ($todo as $value) : ?>
                        <h3 class="text-xl font-semibold mt-5 mx-8"><?php echo "$number. $value"?></h3>
                    <?php endforeach ?>
                <?php endforeach ?>
               <a href="../App/View/ViewAddTodoList.php">
                     <button class="px-10 py-3 w-[300px] border border-3 border-teal-500 block rounded-full absolute bottom-20 right-1/2 translate-x-1/2 hover:bg-gradient-to-r hover:from-indigo-600 hover:to-pink-600"><span class="font-semibold text-xl ">TAMBAH</span></button>
               </a>
                <a href="../App/View/ViewRemoveTodoList.php">
                     <button class="px-10 w-[300px] py-3 border border-3 border-teal-500 block rounded-full absolute bottom-5 right-1/2 translate-x-1/2 hover:bg-gradient-to-r hover:from-indigo-600 hover:to-pink-600"><span class="font-semibold text-xl">HAPUS</span></button>
                </a>
            </div>
        </div>
    </section>

</body>
</html>