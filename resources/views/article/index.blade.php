


<div>
<label>add article </label>
<form action="{{route.store}}" method="post">
     <textarea name="" id="">

     </textarea>

     @foreach(categories as category)
     <Select>Select category <option value="{{route.index}}"></option></Select>
     @endforeach
     <button>save</button>
</form>
</div>