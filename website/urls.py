from django.urls import path, include
from . import views
from django.conf.urls import include
from django.conf.urls.static import static
from django.contrib.staticfiles.storage import staticfiles_storage
from .views import NewcastleView, YorkView, SwanseaView, CPDView, COEView, roxy_and_luna
from django.views.generic.base import TemplateView, RedirectView

urlpatterns = [
	path('', views.index, name='index'),
	path('undergrad/', UndergradView.as_view(), name='undergrad'),
	path('postgrad/', PostgradView.as_view(), name='postgrad'),
	path('talks/', TalksView.as_view(), name='talks'),
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