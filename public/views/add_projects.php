<!DOCTYPE html>

<head>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/projects.css">
        
        <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
        <title>PROJECTS</title>
</head>

<body>
    <div class="base-container">
        <main>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="search project">
                    </form>
                </div>
            </header>
            <section class="project-form">
             <h1>UPLOAD</h1>
             <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                <?php if(isset($messages)){
                    foreach($messages as $message){
                        echo $message;
                    }
                } 
                ?>
                <input name="title" type="text" placeholder="title"> 
                <textarea name="description" rows="5" placeholder="description"></textarea>
                <input type="file" name="file">
                <button type="submit">send</button>

             </form>
            </section>
        </main>
</body>