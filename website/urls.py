from django.urls import path, include
from . import views
from django.conf.urls import include
from django.conf.urls.static import static
from django.contrib.staticfiles.storage import staticfiles_storage
from .views import NewcastleView, YorkView, TryHackMeView, CPDView, COEView, RoxyAndLunaView
from django.views.generic.base import TemplateView, RedirectView

urlpatterns = [
	path('', views.index, name='index'),
	path('newcastle/', NewcastleView.as_view(), name='newcastle'),
	path('york/', YorkView.as_view(), name='york'),
	path('tryhackme/', TryHackMeView.as_view(), name='tryhackme'),
	path('cpd/', CPDView.as_view(), name='cpd'),
	path('coe/', COEView.as_view(), name='coe'),
	path('roxyandluna/', RoxyAndLunaView.as_view(), name='roxyandluna'),
	path(
        "robots.txt",
        TemplateView.as_view(template_name="robots.txt", content_type="text/plain"),
    ),
	path(
        "favicon.ico",
        RedirectView.as_view(url=staticfiles_storage.url("favicon.ico")),
    ),
]