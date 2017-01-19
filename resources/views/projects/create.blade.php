<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        body {padding-top: 40px;}
    </style>
</head>
<body>
    <div id="app" class="container">

        @include('projects.list')

        <form action="/projects" method="POST" @submit.prevent="onSubmit">

            <text-field name="name" title="Project Title:" v-model="form.name" :error="form.errors.get('name')" @valid="form.errors.clear('name')"></text-field>

            <textarea-field name="description" title="Project Description:" v-model="form.description" :error="form.errors.get('description')" @valid="form.errors.clear('description')"></textarea-field>

            <div class="form-group">
                <button class="btn btn-success" :disabled="form.errors.any()">Create</button>
            </div>
        </form>
    </div>

    <script src="/js/projects.js"></script>
</body>
</html>