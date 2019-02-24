from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('whoweare/', views.whoweare, name='whoweare'),
    path('whatwedo/', views.whatwedo, name='whatwedo'),
    path('brothers/', views.brothers, name='brothers'),
]