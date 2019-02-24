from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'index.html')

def whoweare(request):
    return render(request, 'whoweare.html')

def whatwedo(request):
    return render(request, 'whatwedo.html')

def brothers(request):
    return render(request, 'brothers.html')