<div class="col">
  <ul>
    <li>
      Test In Postman @POST api/product/insert
      <ul>
        <textarea type="text" class="form-control" readonly rows="5">
{
    "name" : "Data 1",
    "trans_date" : "2022-04-01 22:25:00",
    "volume" : "100"
}
        </textarea>
      </ul>
    </li>
    <li><a target="_blank" href="https://demo-laravel.gzeinnumer.com/api/product/all">@GET api/product/all</a></li>
    <li><a target="_blank" href="https://demo-laravel.gzeinnumer.com/api/product/find/1">@GET api/product/find/{id}</a></li>
    <li>
      Test In Postman @POST api/product/update/{id}

      <ul>
        <textarea type="text" class="form-control" readonly rows="5">
{
    "name" : "Data 1 Update",
    "trans_date" : "2022-04-01 22:25:00",
    "volume" : "200"
}
        </textarea>
      </ul>
    </li>
    <li><a target="_blank" href="https://demo-laravel.gzeinnumer.com/api/product/delete/1">@GET api/product/delete/{id}</a></li>
    <li><a target="_blank" href="https://demo-laravel.gzeinnumer.com/api/product/paging?limit=10&page=1&start_date=2021-01-01&end_date=2024-12-31">@GET api/product/paging?limit=10&page=1&start_date=2021-01-01&end_date=2024-12-31</a></li>
  </ul>
  <br><br>
</div>