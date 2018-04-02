@inject('date','App\utilities\Date')

@if($date::isWeekend())
                    {{"c'est le weekend"}}
                @else
                    {{"ce n'est pas le weekend"}}
                @endif