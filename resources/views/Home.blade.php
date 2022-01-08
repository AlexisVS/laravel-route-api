<x-layout.mainLayout>
    <h1>Bonjour</h1>
    <form action="/import" method="post" enctype="multipart/form-data">
    @csrf
    @method('post')
    <input type="file" name="file">
    <input type="submit" value="save">
    </form>
</x-layout.mainLayout>