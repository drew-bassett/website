from django.shortcuts import render
from django.views.generic import TemplateView

# Create your views here.

def index(request):
	return render(request, 'index.html', context=None)
	
class NewcastleView(TemplateView):
	template_name = 'newcastle.html'
	
class YorkView(TemplateView):
	template_name = 'york.html'
	
class TryHackMeView(TemplateView):
	template_name = 'tryhackme.html'
	
class CPDView(TemplateView):
	template_name = 'cpd.html'
	
class COEView(TemplateView):
	template_name = 'coe.html'
	
class RoxyAndLunaView(TemplateView):
	template_name = 'roxyandluna.html'