<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\AppointmentResource;
use App\Filament\Resources\ArticleResource;
use App\Filament\Resources\BranchResource;
use App\Filament\Resources\ConsultationRequestResource;
use App\Filament\Resources\ServiceResource;
use App\Filament\Resources\TeamResource;
use App\Models\Appointment;
use App\Models\Article;
use App\Models\Branch;
use App\Models\ConsultationRequest;
use App\Models\Service;
use App\Models\Team;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StateWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Services", Service::count())
                ->description("Number Of Services")
                ->descriptionIcon("heroicon-o-inbox-stack", IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40,])
                ->color("success")
                ->url(ServiceResource::getUrl()),

            Stat::make("Articles", Article::count())
                ->description("Number Of Articles")
                ->descriptionIcon("heroicon-o-presentation-chart-bar", IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40,])
                ->color("success")
                ->url(ArticleResource::getUrl()),

            Stat::make("Branches", Branch::count())
                ->description("Number Of Branches")
                ->descriptionIcon("heroicon-o-building-office-2", IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40,])
                ->color("success")
                ->url(BranchResource::getUrl()),


            Stat::make("ourTeam", Team::count())
                ->description("Number Of Our Team")
                ->descriptionIcon("heroicon-o-users", IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40,])
                ->color("success")
                ->url(TeamResource::getUrl()),


            Stat::make("Appointment", Appointment::count())
                ->description("Number Of Appointments")
                ->descriptionIcon("heroicon-o-users", IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40,])
                ->color("success")
                ->url(AppointmentResource::getUrl()),


            Stat::make("Consultations", ConsultationRequest::count())
                ->description("Number Of Consultations")
                ->descriptionIcon("heroicon-o-users", IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40,])
                ->color("success")
                ->url(ConsultationRequestResource::getUrl()),

        ];
    }
}
