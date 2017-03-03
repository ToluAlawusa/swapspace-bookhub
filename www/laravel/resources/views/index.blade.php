@extends('layouts.cus')
@section('content')

    <div class="book-display">
        <a href="/userbookpreview">
          <div class="display-book" style="background: url() 
          no-repeat center; background-size: cover; width: 190px;
          height: 270px;"></div>
      <div class="info">
        <h2 class="book-title"></h2>
          <h3 class="book-author"></h3>
            <h3 class="book-price">$</h3></a>
      </div>
                
    </div>                 
    <div class="trending-books horizontal-book-list">
      <h3 class="header">Trending</h3>
      <ul class="book-list">
       
          <li class="book">          
            <a href="/userbookpreview">
            <div class="book-cover" style="background: url() 
            no-repeat center; background-size: cover; width: 168px;
            height: 218px;"></div>
            <div class="book-price"><p>$</p></div>
            </a>
          </li>
                       
      </ul>
    </div>
    <div class="recently-viewed-books horizontal-book-list">
      <h3 class="header">Recently Viewed</h3>
      <ul class="book-list">
        <div class="scroll-back"></div>
        <div class="scroll-front"></div>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$250</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$50</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$125</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$90</p></div>
        </li>
      </ul>
    </div>

@endsection