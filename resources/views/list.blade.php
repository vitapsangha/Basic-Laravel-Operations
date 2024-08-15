<h1>Details</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Contact</td>
        <td>Operations</td>
</tr>
@foreach($posts as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['contact']}}</td>
    <td>
    <a href={{'delete/'.$item['$id']}}>Delete</a>
    <a href={{'edit/'.$item['$id']}}>Update</a>
</td>

</tr>

