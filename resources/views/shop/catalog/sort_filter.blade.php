
<style>
.sort-dropdown-menu{
    padding-left:10px;
    padding-right:10px;
}
</style>

<div class='row'>
    <div class='col'>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                <span name-sort>По популятронсти</span>
            </button>
            <ul class="dropdown-menu sort-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sort-product" id="RadioSort1" data-sort='asc-popularity' checked>
                  <label class="form-check-label" for="RadioSort1">
                        По популятронсти
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sort-product" id="RadioSort2" data-sort='asc-rating'>
                  <label class="form-check-label" for="RadioSort2">
                        По рейтингу
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sort-product" id="RadioSort3" data-sort='asc-prices'>
                  <label class="form-check-label" for="RadioSort3">
                        По возрастанию цены
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sort-product" id="RadioSort4" data-sort='desc-prices'>
                  <label class="form-check-label" for="RadioSort4">
                        По убыванию цены
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sort-product" id="RadioSort5" data-sort='asc-new'>
                  <label class="form-check-label" for="RadioSort5">
                        По новинкам
                  </label>
                </div>
            </ul>
        </div>
    </div>
    <div class='col'>

    </div>
    <div class='col'>

    </div>
</div>