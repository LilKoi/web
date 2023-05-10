<?php

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<form id="calc_1" action="laba_3.php" method="POST" class="w-25 border border-black">
    <label class="form-label">Аргумент 1</label>
    <input name="calc" type="hidden">
    <input required name="arg_1" class="form-control">
    <label class="form-label">Оператор</label>
    <select required name="operator" class="form-control">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label class="form-label">Аргумент 2</label>
    <input required name="arg_2" class="form-control">
    <button class="btn btn-primary">Посчитать</button>
</form>
<p id="result_1"></p>
<form id="find_name" class="w-25 mt-5 border p-5 border-black">
    <input name="name" class="form-control border-black">
    <input name="find_name" type="hidden" class="form-control border-black">

</form>
<div id="result">

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    document.querySelector("#calc_1 button").addEventListener("click", async e => {
        e.preventDefault()
        const req = await fetch("functions.php", {
            method: "POST",
            body: new FormData(document.querySelector("#calc_1"))
        })
        const res = await req.text()
        document.querySelector("#result_1").innerText = `Результат ${res}`
    })

    document.querySelector("#find_name input").addEventListener("input", async e => {
        e.preventDefault()
        const req = await fetch("functions.php", {
            method: "POST",
            body: new FormData(document.querySelector("#find_name"))
        })
        const res = await req.json()
        document.querySelector("#result").innerHTML = ""
        res.forEach(Element => {
            document.querySelector("#result").innerHTML += `<p>${Element}</p>`
        })
    })
</script>