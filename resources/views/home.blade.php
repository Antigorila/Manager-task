@extends('layouts.app')

@section('content')

<main class="st_viewport">
  <div class="st_wrap_table" data-table_id="0">
    <header class="st_table_header">
      <h2>Termek:</h2>
      <div class="st_row">
        <div class="st_column _rank">ID</div>
        <div class="st_column _name">Név</div>
        <div class="st_column _surname">Helyszín</div>
      </div>
    </header>
    @foreach (\App\Models\Classroom::all() as $classroom)
    <div class="st_row">
        <div class="st_column _rank">{{ $classroom->id }}</div>
        <div class="st_column _name">{{ $classroom->name  }}</div>
        <div class="st_column _surname">{{ $classroom->location }}</div>
        <div class="row jobbra">
            <div class="col">
                <button type="submit" class="btn functionButton">Edit</button>
            </div>
            <div class="col">
                <button type="submit" class="btn functionButton">Delete</button>
            </div>
        </div>
      </div>
    @endforeach
    <div class="st_row">
        <div class="st_column _rank">{{ $classroom->id + 1 }}</div>
        <div class="st_column _name">
            <input class="newData" placeholder="Terem neve">
        </div>
        <div class="st_column _surname">
            <input class="newData" placeholder="Helyszín">
        </div>
        <div class="st_column _year">
            <button type="submit" class="btn functionButton">Hozzáadás</button>
        </div>
    </div>
  <div class="st_wrap_table" data-table_id="1">
    <header class="st_table_header">
      <h2>Eszközök:</h2>
      <div class="st_row">
        <div class="st_column _rank">ID</div>
        <div class="st_column _name">Gyártó</div>
        <div class="st_column _surname">Sorozat szám</div>
        <div class="st_column _year">Modell név</div>
        <div class="st_column _section">Sorszám</div>
        <div class="st_column _error">Error</div>
      </div>
    </header>
    @foreach (\App\Models\Equipment::all() as $tool)
    <div class="st_row">
        <div class="st_column _rank">{{ $tool->id }}</div>
        <div class="st_column _name">{{ $tool->producer  }}</div>
        <div class="st_column _surname">{{ $tool->serial_number }}</div>
        <div class="st_column _year">{{ $tool->model_name }}</div>
        <div class="st_column _section">{{ $tool->model_number }}</div>
        <div class="st_column _error">{{ $tool->error }}</div>
        <div class="row jobbra">
            <div class="col">
                <button type="submit" class="btn functionButton">Edit</button>
            </div>
            <div class="col">
                <button type="submit" class="btn functionButton">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
    <div class="st_row">
        <div class="st_column _rank">{{ $tool->id + 1 }}</div>
        <div class="st_column _name">
            <input class="newData" placeholder="Gyártó">
        </div>
        <div class="st_column _surname">
            <input class="newData" placeholder="Sorszám">
        </div>
        <div class="st_column _year">
            <input class="newData" placeholder="Modell név">
        </div>
        <div class="st_column _section">
            <input class="newData" placeholder="Sorszám">
        </div>
        <div class="st_column _year">
            <button type="submit" class="btn functionButton">Hozzáadás</button>
        </div>
    </div>
      
  <div class="st_wrap_table" data-table_id="2">
    <header class="st_table_header">
      <h2>Cégek:</h2>
      <div class="st_row">
        <div class="st_column _rank">ID</div>
        <div class="st_column companyName">Cég neve</div>
        <div class="st_column companyLocation">Cég címe</div>
        <div class="st_column taxNumber">Adó szám</div>
      </div>
    </header>
    @foreach (\App\Models\Company::all() as $company)
    <div class="st_row">
        <div class="st_column _rank">{{ $company->id }}</div>
        <div class="st_column companyName">{{ $company->company_name  }}</div>
        <div class="st_column companyLocation">{{ $company->company_address }}</div>
        <div class="st_column taxNumber">{{ $company->tax_number }}</div>
        <div class="row jobbra">
            <div class="col">
                <button type="submit" class="btn functionButton">Edit</button>
            </div>
            <div class="col">
                <button type="submit" class="btn functionButton">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
    <div class="st_row">
        <div class="st_column _rank">{{ $company->id + 1 }}</div>
        <div class="st_column _name">
            <input class="newData" placeholder="Cég neve">
        </div>
        <div class="st_column _surname">
            <input class="newData" placeholder="Cég címe">
        </div>
        <div class="st_column _year">
            <input class="newData" placeholder="Adó szám">
        </div>
        <div class="st_column _year">
            <button type="submit" class="btn functionButton">Hozzáadás</button>
        </div>
    </div>
    
    <div class="st_wrap_table" data-table_id="2">
        <header class="st_table_header">
          <h2>Szofverek:</h2>
          <div class="st_row">
            <div class="st_column _rank">ID</div>
            <div class="st_column _name">Szofver neve</div>
            <div class="st_column _surname">Liszensz</div>
            <div class="st_column _year">Lejárati dátum</div>
            <div class="st_column _section">Aktív<var></var></div>
          </div>
        </header>
    @foreach (\App\Models\Software::all() as $software)
    <div class="st_row">
        <div class="st_column _rank">{{ $software->id }}</div>
        <div class="st_column _name">{{ $software->name  }}</div>
        @if ($software->license == 1)
            <div class="st_column _surename">Van</div>
        @else
            <div class="st_column _surename">Nincs</div>
        @endif
        <div class="st_column _year">{{ $software->expiration_date }}</div>
        @if ($software->active == 1)
            <div class="st_column _surename">Aktív</div>
        @else
            <div class="st_column _surename">Innaktív</div>
        @endif
        <div class="row jobbra">
            <div class="col">
                <button type="submit" class="btn functionButton">Edit</button>
            </div>
            <div class="col">
                <button type="submit" class="btn functionButton">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
    <div class="st_row">
        <div class="st_column _rank">{{ $software->id + 1 }}</div>
        <div class="st_column _name">
            <input class="newData" placeholder="Szofver neve">
        </div>
        <div class="st_column _surname">
            <select>
                <option value="1">Van</option>
                <option value="0">Nincs</option>
            </select>
        </div>
        <div class="st_column _year">
            <input class="newData" for="date" placeholder="Lejárati dátum">
        </div>
        <div class="st_column _section">
            <select>
                <option value="1">Aktív</option>
                <option value="0">Innaktív</option>
            </select>
        </div>
        <div class="st_column _year">
            <button type="submit" class="btn functionButton">Hozzáadás</button>
        </div>
    </div>
</main>


@endsection
