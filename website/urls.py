from django.urls import path, include
from . import views
from django.conf.urls import include
from django.conf.urls.static import static
from django.contrib.staticfiles.storage import staticfiles_storage
from .views import PapersandTalksView, CPDView, roxy_and_luna
from django.views.generic.base import TemplateView, RedirectView

urlpatterns = [
	path('', views.index, name='index'),
	path('papersandtalks/', PapersandTalksView.as_view(), name='papersandtalks'),
	path('cpd/', CPDView.as_view(), name='cpd'),
	path('roxyandluna/', roxy_and_luna, name='roxyandluna'),
	path(
        "robots.txt",
        TemplateView.as_view(template_name="robots.txt", content_type="text/plain"),
    ),
	path(
        "favicon.ico",
        RedirectView.as_view(url=staticfiles_storage.url("favicon.ico")),
    ),
]